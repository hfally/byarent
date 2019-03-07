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

                @include('pages.house.partials._show')

                <div class="mt-4 text-right">
                    @include('partials.cart-button')
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection