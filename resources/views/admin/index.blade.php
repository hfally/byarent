@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
    @component('admin.components.top-nav')@endcomponent

    <main style="margin-top: 150px;min-height: calc(100vh - 88px - 150px)">

    </main>

    @component('components.footer')@endcomponent
@endsection