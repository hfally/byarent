@extends('layouts.master')

@section('title', "House $house->number")

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 150px;min-height: calc(100vh - 88px - 150px)">
        <section id="house" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    {{ $house->no_of_room }} Bedroom-{{ ucwords($house->category->name) }} at {{ $house->city }},
                    {{ $house->state }}
                </h2>
                <hr/>

                @include('pages.house.partials.slider')

                <div class="bg-dark my-2 p-2 text-light text-center">
                    <i class="fab fa-fort-awesome" aria-hidden="true"></i> {{ ucwords($house->category->name) }}
                    &emsp;|&emsp;
                    <i class="fa fa-bed"></i> {{ $house->no_of_room }} Rooms
                    &emsp;|&emsp;
                    <i class="fa fa-shower"></i> {{ $house->no_of_bath }} Bath
                    &emsp;|&emsp;
                    <i class="fa fa-map"></i> {{ $house->size }}
                    &emsp;|&emsp;
                    <i class="fa fa-clock"></i> Posted {{ $house->posted_at }}
                </div>

                <div class="property-section bg-light my-2">
                    <div class="row">
                        <div class="col-md-6 border-right-dotted">
                            <div class="p-3">
                                <h3><i class="fa fa-map-pin text-danger"></i> Location</h3>
                                <strong>Street:</strong> {{ ucwords($house->street) }}
                                <br/>
                                <strong>Local Government Area:</strong> {{ ucwords($house->lga) }}
                                <br/>
                                <strong>City:</strong> {{ ucwords($house->city) }}
                                <br/>
                                <strong>State:</strong> {{ $house->state }}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h3 class="font-italic text-theme-alt font-weight-bold">
                                    &#8358; {{ number_format($house->amount) }}</h3>

                                <h3>Description</h3>

                                {!! $house->description !!}
                            </div>
                        </div>
                    </div>
                </div>

                @if (!$house->order->count())
                    <div class="mt-4 text-right">
                        @include('partials.cart-button')
                    </div>
                @endif
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection