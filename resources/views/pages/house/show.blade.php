@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 150px;min-height: calc(100vh - 88px - 150px)">
        <section id="house" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    5 Bedroom-Bungalow at Ikeja, Lagos
                </h2>
                <hr/>

                @include('pages.house.partials.slider')

                <div class="bg-dark my-2 p-2 text-light text-center">
                    <i class="fa fa-home"></i> Residential
                    &emsp;|&emsp;
                    <i class="fab fa-fort-awesome" aria-hidden="true"></i> Bungalow
                    &emsp;|&emsp;
                    <i class="fa fa-bed"></i> 5 Rooms
                    &emsp;|&emsp;
                    <i class="fa fa-shower"></i> 2 Bath
                    &emsp;|&emsp;
                    <i class="fa fa-map"></i> 43ft/23ft
                    &emsp;|&emsp;
                    <i class="fa fa-clock"></i> Posted 1 month ago
                </div>

                <div class="property-section bg-light my-2">
                    <div class="row">
                        <div class="col-md-6 border-right-dotted">
                            <div class="p-3">
                                <h3><i class="fa fa-map-pin text-danger"></i> Location</h3>
                                <strong>Street:</strong> 9 Abebi
                                <br/>
                                <strong>Local Government Area:</strong> Kosofe
                                <br/>
                                <strong>City:</strong> Ikeja
                                <br/>
                                <strong>State:</strong> Lagos
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h3 class="font-italic text-theme-alt font-weight-bold">&#8358; 45,000,000</h3>

                                <h3>Description</h3>

                                Located in the sub-haran part of the city.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-right">
                    <button class="btn btn-dark">
                        <i class="fa fa-cart-plus"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection