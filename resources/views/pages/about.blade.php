@extends('layouts.master')

@section('title', 'About Us')

@section('content')
    @component('components.top-nav')@endcomponent

    <main style="margin-top: 150px; min-height: calc(100vh - 150px - 88px)">
        <section class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    About BYARENT
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