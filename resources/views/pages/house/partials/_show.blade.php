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