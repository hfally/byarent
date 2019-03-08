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
                            <a href="{{ route('houses') }}" class="btn btn-theme scroll-wrap">
                                Get Started
                            </a>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td height="10">
                        <h1 class="text-center py-3">
                            <a href="#houses" role="button"
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

                <div class="row justify-content-center">
                    @foreach($latest_houses as $house)
                        <div class="col-sm-4 my-3">
                            <div class="card house-card shadow">
                                <div class="card-body" style="background: url({{ $house->avatar }})"></div>

                                <div class="card-footer text-center font-weight-bold bg-theme text-white font-italic lead">
                                    &#8358; {{ number_format($house->amount) }}
                                </div>

                                <div class="card-footer">
                                    <address class="text-center">
                                        <i class="fa fa-map-pin text-danger"></i>
                                        {{ "$house->street, $house->city, $house->state" }}.
                                    </address>

                                    <p class="text-center lead">
                                        {{ "{$house->breadth}ft/{$house->length}ft | {$house->no_of_room}br " . ucwords($house->category->name) }}
                                    </p>

                                    <p class="text-center">
                                        <a href="">-- Show More --</a>
                                    </p>

                                    <small class="text-muted form-text text-center">
                                        <i class="fa fa-clock"></i>
                                        Posted {{ Carbon\Carbon::parse($house->created_at)->diffForHumans() }}
                                    </small>
                                </div>

                                <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                    @include('partials.cart-button')

                                    <a href="{{ route('house.show', encrypt($house->id)) }}"
                                       class="btn w-100 btn-secondary border-top-right-radius-0">
                                        <i class="fa fa-eye"></i>
                                        View details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($all_houses > 6)
                    <div class="my-4 text-right">
                        <a href="{{ route('houses') }}" class="no-animation-hover">
                            View all houses
                            <span class="animated bounce infinite d-inline-block">
                            <i class="fa fa-walking"></i>
                        </span>
                        </a>
                    </div>
                @endif

                @if(!$latest_houses->count())
                    <strong class="alert alert-info d-block text-center">
                        Sorry, no houses available at this moment. Check back later.
                        <br/>
                        Thanks!
                    </strong>
                @endif
            </div>
        </section>

        {{--BLOCKQUOTE--}}
        <section id="blockquote" class="my-5 py-3 bg-light">
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

        <section id="agents" class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 border-right d-flex align-items-center">
                        <div class="text-center text-muted">
                            <h2 style="font-size: 50pt">
                                <i class="fa fa-lock"></i>
                            </h2>

                            <strong class="form-text font-italic mb-2 text-dark">
                                safe & secure
                            </strong>

                            Byarent plays a dynamic, diversified and growing role in the
                            Nigerian real estate market. We provide our clients with customized solutions to their real estate
                            needs.
                        </div>
                    </div>

                    <div class="col-md-6 text-center">
                        <img src="{{ 'img/mobile2.png' }}" width="300">
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0" style="background: #000">
            <div class="container pb-0">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/-aacu_wNwLs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection