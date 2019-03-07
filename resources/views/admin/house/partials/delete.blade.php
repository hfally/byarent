<div class="modal fade" role="dialog" id="delete-house-{{ $house->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body lead text-center">
                <form method="post" action="{{ route('house.delete', encrypt($house->id)) }}" id="form-delete">
                    @csrf
                </form>

                You are about to delete a house. Do you wish to proceed with this action?
            </div>
            <div class="modal-footer text-right">
                <button class="btn btn-dark btn-sm" data-dismiss="modal">No, cancel</button>
                <button type="submit" form="form-delete" class="btn btn-danger btn-sm">Yes, continue
                </button>
            </div>
        </div>
    </div>
</div>