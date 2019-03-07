<div class="modal fade" tabindex="-1" role="dialog" id="{{ $id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center {{ $body_attr }}">
                <div class="pt-3">
                    {!! $body !!}
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-dark btn-sm px-4" data-dismiss="modal" type="button">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>