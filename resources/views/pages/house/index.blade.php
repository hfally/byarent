@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 150px">
        <section id="houses" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    All Houses
                </h2>
                <hr/>

                <div class="row">
                    <div class="col-sm-4 my-3">
                        <div class="card house-card shadow">
                            <div class="card-body" style="background: url({{ asset('img/houses/one.jpg') }})"></div>

                            <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                &#8358; 500,000,000
                            </div>

                            <div class="card-footer">
                                <address class="text-center">
                                    <i class="fa fa-map-pin text-danger"></i>
                                    Ikeja, Lagos.
                                </address>

                                <p class="text-center lead">
                                    43ft/23ft | 5br Duplex
                                </p>

                                <small class="text-muted form-text text-center">
                                    <i class="fa fa-clock"></i>
                                    Posted 1 hour ago
                                </small>
                            </div>

                            <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                <button type="button" class="btn w-100 btn-dark border-top-left-radius-0">
                                    <i class="fa fa-cart-plus"></i>
                                    Add to cart
                                </button>

                                <button type="button" class="btn w-100 btn-secondary border-top-right-radius-0">
                                    <i class="fa fa-eye"></i>
                                    View details
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 my-3">
                        <div class="card house-card shadow">
                            <div class="card-body" style="background: url({{ asset('img/houses/two.jpg') }})"></div>

                            <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                &#8358; 630,000,000
                            </div>

                            <div class="card-footer">
                                <address class="text-center">
                                    <i class="fa fa-map-pin text-danger"></i>
                                    Ikeja GRA, Lagos.
                                </address>

                                <p class="text-center lead">
                                    43ft/23ft | 5br Bungalow
                                </p>

                                <small class="text-muted form-text text-center">
                                    <i class="fa fa-clock"></i>
                                    Posted 1 month ago
                                </small>
                            </div>

                            <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                <button type="button" class="btn w-100 btn-dark border-top-left-radius-0">
                                    <i class="fa fa-cart-plus"></i>
                                    Add to cart
                                </button>

                                <button type="button" class="btn w-100 btn-secondary border-top-right-radius-0">
                                    <i class="fa fa-eye"></i>
                                    View details
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 my-3">
                        <div class="card house-card shadow">
                            <div class="card-body" style="background: url({{ asset('img/houses/item3.jpg') }})"></div>

                            <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                &#8358; 450,000,000
                            </div>

                            <div class="card-footer">
                                <address class="text-center">
                                    <i class="fa fa-map-pin text-danger"></i>
                                    Ogudu, Lagos.
                                </address>

                                <p class="text-center lead">
                                    43ft/23ft | 5br Bungalow
                                </p>

                                <small class="text-muted form-text text-center">
                                    <i class="fa fa-clock"></i>
                                    Posted 1 month ago
                                </small>
                            </div>

                            <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                <button type="button" class="btn w-100 btn-dark border-top-left-radius-0">
                                    <i class="fa fa-cart-plus"></i>
                                    Add to cart
                                </button>

                                <button type="button" class="btn w-100 btn-secondary border-top-right-radius-0">
                                    <i class="fa fa-eye"></i>
                                    View details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-3">
                        <div class="card house-card shadow">
                            <div class="card-body" style="background: url({{ asset('img/houses/item1.jpg') }})"></div>

                            <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                &#8358; 500,000,000
                            </div>

                            <div class="card-footer">
                                <address class="text-center">
                                    <i class="fa fa-map-pin text-danger"></i>
                                    Ikeja, Lagos.
                                </address>

                                <p class="text-center lead">
                                    43ft/23ft | 5br Duplex
                                </p>

                                <small class="text-muted form-text text-center">
                                    <i class="fa fa-clock"></i>
                                    Posted 1 hour ago
                                </small>
                            </div>

                            <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                <button type="button" class="btn w-100 btn-dark border-top-left-radius-0">
                                    <i class="fa fa-cart-plus"></i>
                                    Add to cart
                                </button>

                                <button type="button" class="btn w-100 btn-secondary border-top-right-radius-0">
                                    <i class="fa fa-eye"></i>
                                    View details
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 my-3">
                        <div class="card house-card shadow">
                            <div class="card-body" style="background: url({{ asset('img/houses/item2.jpg') }})"></div>

                            <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                &#8358; 630,000,000
                            </div>

                            <div class="card-footer">
                                <address class="text-center">
                                    <i class="fa fa-map-pin text-danger"></i>
                                    Ikeja GRA, Lagos.
                                </address>

                                <p class="text-center lead">
                                    43ft/23ft | 5br Bungalow
                                </p>

                                <small class="text-muted form-text text-center">
                                    <i class="fa fa-clock"></i>
                                    Posted 1 month ago
                                </small>
                            </div>

                            <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                <button type="button" class="btn w-100 btn-dark border-top-left-radius-0">
                                    <i class="fa fa-cart-plus"></i>
                                    Add to cart
                                </button>

                                <button type="button" class="btn w-100 btn-secondary border-top-right-radius-0">
                                    <i class="fa fa-eye"></i>
                                    View details
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 my-3">
                        <div class="card house-card shadow">
                            <div class="card-body" style="background: url({{ asset('img/houses/item4.jpg') }})"></div>

                            <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                &#8358; 450,000,000
                            </div>

                            <div class="card-footer">
                                <address class="text-center">
                                    <i class="fa fa-map-pin text-danger"></i>
                                    Ogudu, Lagos.
                                </address>

                                <p class="text-center lead">
                                    43ft/23ft | 5br Bungalow
                                </p>

                                <small class="text-muted form-text text-center">
                                    <i class="fa fa-clock"></i>
                                    Posted 1 month ago
                                </small>
                            </div>

                            <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                <button type="button" class="btn w-100 btn-dark border-top-left-radius-0">
                                    <i class="fa fa-cart-plus"></i>
                                    Add to cart
                                </button>

                                <button type="button" class="btn w-100 btn-secondary border-top-right-radius-0">
                                    <i class="fa fa-eye"></i>
                                    View details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-4 text-right">
                    {!! $houses->links() !!}
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection