@extends('layouts.master')

@section('title', 'Invoice')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 76px;min-height: calc(100vh - 86px - 78px);height: 100%" class="bg-theme-alt">
        <section id="checkout" class="py-5">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Order {{ $order->number }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <p>
                            <strong>Transaction Reference:</strong> {{ strtoupper($order->transaction_reference) }}
                            <br/>
                            <strong>Total:</strong> &#8358; {{ number_format($order->amount, 2) }}
                            <br/>
                            <strong>Date:</strong> {{ Carbon\Carbon::parse($order->created_at)->format('D, M d, Y') }}
                            <br/>
                        </p>

                        <table class="table font-weight-bold">
                            <thead class="bg-dark text-light text-nowrap">
                            <tr>
                                <th>
                                    House No
                                </th>

                                <th>
                                    Display
                                </th>

                                <th>
                                    Details
                                </th>

                                <th>
                                    Location
                                </th>

                                <th>
                                    Amount
                                </th>

                                <th></th>
                            </tr>
                            </thead>

                            @foreach($order->houses as $house)
                                <tr>
                                    <td class="border-top-0">
                                        {{ $house->number }}
                                    </td>

                                    <td width="150" class="border-top-0">
                                        <img src="{{ $house->avatar }}" class="img-fluid shadow">
                                    </td>

                                    <td class="border-top-0">
                                        {{ $house->no_of_room }}br
                                        {{ ucwords($house->category->name) }}.
                                    </td>

                                    <td>
                                        <i class="fa fa-map-pin text-danger"></i>
                                        {{ $house->city }}, {{ $house->state }}
                                    </td>

                                    <td>
                                        &#8358; {{ number_format($house->amount) }}
                                    </td>

                                    <td class="text-right">
                                        <button data-toggle="modal" data-target="#view-house-{{ $house->id }}"
                                                class="btn btn-info btn-sm py-2 px-3">
                                            View
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>

        @foreach($order->houses as $house)
            <div class="modal fade" role="dialog" id="view-house-{{ $house->id }}">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            @include('pages.house.partials._show')
                        </div>
                        <div class="modal-footer text-right">
                            <button class="btn btn-dark btn-sm" data-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>

    @component('components.footer')@endcomponent
@endsection