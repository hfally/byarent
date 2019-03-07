<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @php($x = 1)
        @foreach($house->pictures as $picture)
            <li data-target="#myCarousel" data-slide-to="1" class="{{ $x == 1 ? 'active' : '' }}"></li>
            @php($x++)
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @php($x = 1)
        @foreach($house->pictures as $picture)
            <div data-toggle="modal" data-target="#photo-{{ $x }}"
                 class="carousel-item {{ $x == 1 ? 'active' : '' }} gallery-item"
                 style='background:url({{ $picture->path }})'></div>
        @php($x++)
        @endforeach

    <!-- Left and right controls -->
        <a class="carousel-control-prev carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@php($x = 1)
@foreach($house->pictures as $picture)
    <!-- Modal -->
    <div id="photo-{{ $x }}" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ $picture->path }}" class="w-100"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->
    @php($x++)
@endforeach
