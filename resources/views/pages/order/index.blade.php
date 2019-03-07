@extends('layouts.master')

@section('title', 'Orders')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 76px;min-height: calc(100vh - 86px - 78px);height: 100%" class="bg-theme-alt">
        <section id="checkout" class="py-5">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Orders
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table font-weight-bold">
                            <thead class="bg-dark text-light text-nowrap">
                            <tr>
                                <th>
                                    Order No
                                </th>

                                <th>
                                    Reference
                                </th>

                                <th>
                                    Amount
                                </th>

                                <th>
                                    Date
                                </th>

                                <th></th>
                            </tr>
                            </thead>

                            @foreach($orders as $order)
                                <tr>
                                    <td class="align-middle">
                                        {{ $order->number }}
                                    </td>

                                    <td class="align-middle">
                                        {{ strtoupper($order->transaction_reference) }}
                                    </td>

                                    <td class="align-middle">
                                        &#8358; {{ number_format($order->amount) }}
                                    </td>

                                    <td class="align-middle">
                                        {{ Carbon\Carbon::parse($order->created_at)->format('D, M d, Y') }}
                                    </td>

                                    <td class="text-right align-middle">
                                        <a href="{{ route('invoice', encrypt($order->id)) }}"
                                           class="btn btn-info btn-sm py-2 px-3">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            @if($orders->count() < 1)
                                <tr>
                                    <td class="text-center text-muted" colspan="5">
                                        <h3>Your have no order!</h3>
                                        <br/>
                                        Proceed to
                                        <a href="{{ route('houses') }}"
                                           class="btn btn-success animated pulse infinite no-animation-hover mx-2">HOUSES</a> to add
                                        to your cart and make an order.
                                        <br/>
                                        Thanks!
                                    </td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection