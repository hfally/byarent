@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 150px; min-height: calc(100vh - 150px - 88px)">
        <section class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    Contact BYARENT
                </h2>
                <hr/>

                <div class="row">
                    <div class="col-md-6">
                        Byarent plays a dynamic, diversified and growing role in the
                        Nigerian real estate market. We provide our clients with customized solutions to their real
                        estate
                        needs.

                        <hr class="my-2"/>

                        <p>
                            You can reach us on:
                        </p>


                        <p>
                            <i class="fa fa-mobile"></i> &emsp;+2348102000200
                        </p>

                        <p>
                            <i class="fa fa-envelope"></i>&emsp;hello@byarent.com
                        </p>

                        <p>
                            <i class="fa fa-map-pin text-danger"></i> &emsp;9, Abebi Close, Ogudu RD. Lagos.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <form class="lead">
                            <div class="form-group">
                                <input type="text" class="form-control p-3" title="Name" placeholder="Name"/>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control p-3" title="Email" placeholder="Email"/>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control p-3" rows="10" title="Message"
                                          placeholder="Message"></textarea>
                            </div>

                            <button class="btn btn-success py-3 btn-block" type="button">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection