<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $orders = Order::latest()->paginate(20);

        return view('admin.order.index', compact('orders'));
    }

    public function show ($id)
    {
        $id = decrypt($id);

        $order = Order::find($id);

        if(!$order) {
            abort(404);
        }

        return view('admin.order.show', compact('order'));
    }
}
