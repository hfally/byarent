@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 76px">
        <section class="homeBanner no-padding" style="height: calc(100vh - 76px)">
            <table class="w-100 h-100" style="background: rgba(1,1,1,0.5)">
                <tr>
                    <td class="text-center text-white" style="padding-top: 50px">
                        <h1 class="font-600 text-uppercase text-center text-white">
                            <i class="fa fa-home" style="font-size: 50pt"></i>
                            <br/>
                            Own a house today
                        </h1>
                        <span>
                            Real Estate | Home evaluation
                          </span>
                        <br/>
                        <br/>
                        <p>
                            <a data-content="get-started" class="btn btn-theme scroll-wrap">
                                Get Started
                            </a>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td height="10">
                        <h1 class="text-center py-3">
                            <a href="#" role="button"
                               class="d-inline-block text-center bounce no-animation-hover infinite animated text-white"
                               data-content="get-started">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </h1>
                    </td>
                </tr>
            </table>
        </section>

        {{--BLOCKQUOTE--}}
        <section id="blockquote" class="my-5 py-3">
            <div class="container">
                <blockquote class="blockquote text-muted text-center">
                    <i class="fa fa-quote-left text-muted"></i>
                    <p class="my-2 font-italic">
                        The ache for home lives in all of us. The safe place where we can go as we are and not be
                        questioned.
                    </p>
                    <footer class="blockquote-footer mb-2">
                        Maya Angelou in <cite title="Source Title">stageoflife.com</cite>
                    </footer>
                    <i class="fa fa-quote-right text-muted"></i>
                </blockquote>
            </div>
        </section>

        <section id="houses" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    Latest Houses
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
                    <a href="{{ route('houses') }}" class="no-animation-hover">
                        View all houses
                        <span class="animated bounce infinite d-inline-block">
                            <i class="fa fa-walking"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section id="agents" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    About
                </h2>
                <hr/>

                <p class="lead">
                    Byarent plays a dynamic, diversified and growing role in the
                    Nigerian real estate market. We provide our clients with customized solutions to their real estate
                    needs.
                </p>

                <p class="lead">
                    We use creative, flexible and cost saving approach to housing development and delivery. Our team
                    draws on an in-depth understanding of the real estate sector, gained through years of practical
                    involvement and experience in the industry.
                </p>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection