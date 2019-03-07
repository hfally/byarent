@extends('layouts.master')

@section('title', 'Edit House Advert')

@section('content')
    @component('admin.components.top-nav')@endcomponent

    <main style="margin-top: 150px;min-height: calc(100vh - 88px - 150px)">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2>
                            Edit House.
                        </h2>
                        <div class="card bg-light mb-5">
                            <div class="card-body">
                                @csrf

                                @include('admin.house.partials.form')
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-success px-5 py-2">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    @component('components.footer')@endcomponent
@endsection

@push('page-script')
    <script>
        $(function () {
            $('.photo').change(function () {
                var id = $(this).attr('data-content');
                var oFile = document.getElementById('photo-' + id).files[0];
                var oImage = document.getElementById('preview-' + id);

                var oReader = new FileReader();
                oReader.onload = function (e) {
                    $('#preview-' + id).removeClass('collapse');
                    oImage.src = e.target.result;
                };

                oReader.readAsDataURL(oFile);
            });

            $('.delete-slide').change(function () {
                var id = $(this).attr('id');
                var img = $(this).parent().find('img');

                if ($(this).is(':checked')) {
                    img.css('opacity', '.4');

                    return ;
                }

                img.css('opacity', '1');
            })
        })
    </script>
@endpush