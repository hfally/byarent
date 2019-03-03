@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 76px;min-height: calc(100vh - 86px - 78px);height: 100%" class="bg-theme-alt">
        <section id="checkout" class="py-5">
            <div class="container">
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
                                    <tr>
                                        <td width="150" class="border-top-0">
                                            <a href="" target="_blank">
                                                <img src="{{ asset('img/houses/item3.jpg') }}" class="img-fluid shadow">
                                            </a>
                                        </td>
                                        <td class="text-right align-middle border-top-0">
                                            &#8358; 43,000,000

                                            <small class="form-text">
                                                5br Bungalow. Ikeja, Lagos
                                            </small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150">
                                            <a href="" target="_blank">
                                                <img src="{{ asset('img/houses/item4.jpg') }}" class="img-fluid shadow">
                                            </a>
                                        </td>
                                        <td class="text-right align-middle">
                                            &#8358; 40,000,000

                                            <small class="form-text">
                                                5br Bungalow. Ikeja, Lagos
                                            </small>
                                        </td>
                                    </tr>
                                </table>

                            </div>

                            <div class="col-sm-5">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>
                                            Sub-Total:
                                        </td>

                                        <td class="text-right">
                                            &#8358; 83,000,000.00
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            VAT:
                                        </td>
                                        <td class="text-right">
                                            &#8358; 5,000.00
                                        </td>
                                    </tr>

                                    <tr class="font-weight-bold">
                                        <td>
                                            Total:
                                        </td>
                                        <td class="text-right">
                                            &#8358; 83,005,000.00
                                        </td>
                                    </tr>
                                </table>

                                <button class="btn btn-block btn-success mt-5">
                                    Proceed Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection