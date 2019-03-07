@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 150px; min-height: calc(100vh - 150px - 88px)">
        <section id="houses" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    All Houses
                </h2>
                <hr/>

                <div class="row">
                    @foreach($houses as $house)
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

                @if(!$houses->count())
                    <strong class="alert alert-info d-block text-center">
                        Sorry, no houses available at this moment. Check back later.
                        <br/>
                        Thanks!
                    </strong>
                @endif

                <div class="my-4 text-right">
                    {!! $houses->links() !!}
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection