<div>
    <button wire:click="deleteId({{$activity->id}})" class="btn btn-danger" data-bs-toggle="modal"
        data-bs-target="#delete-activity-modal-{{$activity->id}}">
        <i class="fa-solid fa-trash"></i>
    </button>

    <div wire:ignore.self class="modal fade" id="delete-activity-modal-{{$activity->id}}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="destroy()" class="btn btn-danger close-modal"
                        data-db-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>