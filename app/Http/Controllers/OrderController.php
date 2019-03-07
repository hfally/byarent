<?php

namespace App\Http\Controllers;

use App\House;
use App\HouseOrder;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('updateCart');
    }

    public function index()
    {
        $orders = auth()->user()->orders()->latest()->get();

        return view('pages.order.index', compact('orders'));
    }

    public function create()
    {
        $houses = House::available()->find(session('cart'));

        $total = $houses ? array_sum($houses->pluck('amount')->toArray()) : 0;

        return view('pages.order.create', compact('houses', 'total'));
    }

    /**
     * Store a new order by client
     *
     * @return OrderController|\Illuminate\Http\RedirectResponse|null
     */
    public function store()
    {
        $houses = House::find(session('cart'));

        if(!$houses){
            abort(502, 'Something went wrong');
        }

        try {
            $transaction = DB::transaction(function () use ($houses) {
                $total = array_sum($houses->pluck('amount')->toArray());

                $order = Order::create([
                    'user_id' => auth()->user()->id,
                    'amount' => $total,
                    'transaction_reference' => uniqid()
                ]);

                foreach ($houses as $house) {
                    HouseOrder::create([
                        'order_id' => $order->id,
                        'house_id' => $house->id
                    ]);
                }

                session()->remove('cart');

                return encrypt($order->id);
            });

            return $this->setFeedback(
                'success',
                'Order successfully placed!<br/>We will contact you soon.<br/>Thanks!',
                null,
                redirect()->route('invoice', $transaction)
            );

        } catch (\Exception $e) {

            return $this->setFeedback('error', $e->getMessage());

        }
    }

    public function updateCart(Request $request)
    {
        $cart = $request->cart;

        if(!$cart) {
            session()->remove('cart');
        } else {
            session()->put('cart', $cart);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Cart updated!',
            'cart' => session('cart'),
            'request' => $request->all()
        ]);
    }

    public function show($id)
    {
        $id = decrypt($id);

        $order = Order::find($id);

        if(!$order) {
            abort(404);
        }

        return view('pages.order.show', compact('order'));
    }
}