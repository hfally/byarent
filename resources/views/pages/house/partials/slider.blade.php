<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div data-toggle="modal" data-target="#photo-1"
             class="carousel-item active gallery-item"
             style='background:url({{ asset('img/houses/item1.jpg') }})'></div>

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

<!-- Modal -->
<div id="photo-1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body p-0">
                <img src="{{ asset('img/houses/item1.jpg') }}" class="w-100"/>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
