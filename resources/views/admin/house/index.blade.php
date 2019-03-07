@extends('layouts.master')

@section('title', 'All Houses')

@section('content')
    @component('admin.components.top-nav')@endcomponent

    <main style="margin-top: 150px; min-height: calc(100vh - 150px - 88px)">
        <section id="houses" class="my-5">
            <div class="container">
                <hr/>
                <h2>
                    All Houses

                    <a href="{{ route('house.create') }}" class="float-right btn btn-info">
                        New House
                    </a>
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
                                        {{ $house->size }}
                                    </p>

                                    <small class="text-muted form-text text-center">
                                        <i class="fa fa-clock"></i>
                                        Posted {{ Carbon\Carbon::parse($house->created_at)->diffForHumans() }}
                                    </small>
                                </div>

                                <div class="btn-group justify-content-between" role="group" aria-label="Basic example">
                                    <a href="{{ route('house.edit', encrypt($house->id)) }}" class="btn w-100 btn-dark border-top-left-radius-0">
                                        <i class="fa fa-edit"></i>
                                        View/Edit
                                    </a>

                                    <button type="button" class="btn w-100 btn-danger border-top-right-radius-0"
                                            data-toggle="modal" data-target="#delete-house-{{ $house->id }}">
                                        <i class="fa fa-trash-alt"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>

                            @include('admin.house.partials.delete')
                        </div>
                    @endforeach
                </div>

                <div class="my-4 text-right">
                    {!! $houses->links() !!}
                </div>
            </div>
        </section>
    </main>

    @component('components.footer')@endcomponent
@endsection