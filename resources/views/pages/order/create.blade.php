@extends('layouts.master')

@section('title', 'Process Cart')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 76px;min-height: calc(100vh - 86px - 78px);height: 100%" class="bg-theme-alt">
        <section id="checkout" class="py-5">
            <div class="container">
                @if($houses)
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Checkout
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7 border-right">

                                    <table class="table font-weight-bold">
                                        @foreach($houses as $house)
                                            <tr>
                                                <td width="150" class="border-top-0">
                                                    <a href="" target="_blank">
                                                        <img src="{{ $house->avatar }}"
                                                             class="img-fluid shadow">
                                                    </a>
                                                </td>
                                                <td class="text-right align-middle border-top-0">
                                                    &#8358; {{ number_format($house->amount) }}

                                                    <small class="form-text">
                                                        {{ $house->no_of_room }}br
                                                        {{ ucwords($house->category->name) }}.
                                                        {{ $house->city }}, {{ $house->state }}
                                                    </small>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>

                                <div class="col-sm-5">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>
                                                Sub-Total:
                                            </td>

                                            <td class="text-right">
                                                &#8358; {{ number_format($total, 2) }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                VAT:
                                            </td>
                                            <td class="text-right">
                                                &#8358; 00.00
                                            </td>
                                        </tr>

                                        <tr class="font-weight-bold">
                                            <td>
                                                Total:
                                            </td>
                                            <td class="text-right">
                                                &#8358; {{ number_format($total, 2) }}
                                            </td>
                                        </tr>
                                    </table>

                                    <form method="post" action="{{ route('order') }}" id="form-place-order">
                                        @csrf
                                    </form>

                                    <button type="button" class="btn btn-block btn-success mt-5 py-3"
                                            data-toggle="modal" data-target="#place-order">
                                        Place Order
                                        <i class="fa fa-check-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                @else

                    <div class="alert alert-info lead text-center">
                        Your shopping cart is empty!
                        <br/>
                        Proceed to
                        <a href="{{ route('houses') }}"
                           class="btn btn-success animated pulse infinite no-animation-hover mx-2">HOUSES</a> to add
                        to your cart.
                        <br/>
                        Thanks!
                    </div>
                @endif
            </div>
        </section>
    </main>

    {{--MODALS--}}
    <div class="modal fade" role="dialog" id="place-order">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body lead text-center">
                        You are about to place an order. Do you wish to proceed with this action?
                </div>
                <div class="modal-footer text-right">
                    <button class="btn btn-dark btn-sm" data-dismiss="modal">No, cancel</button>
                    <button type="submit" form="form-place-order" class="btn btn-success btn-sm">Yes, continue
                    </button>
                </div>
            </div>
        </div>
    </div>

    @component('components.footer')@endcomponent
@endsection