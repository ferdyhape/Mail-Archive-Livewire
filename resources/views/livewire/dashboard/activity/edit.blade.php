<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#edit-activity-modal-{{$activity->id}}"><i class="fa-solid fa-pen-to-square"></i></button>

    <!-- Modal -->
    <div class="modal fade" wire:ignore.self id="edit-activity-modal-{{$activity->id}}" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Edit Activity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text"
                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                wire:model.defer="name" placeholder="Name" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click.prevent="update()" type="submit" class="btn btn-primary ">Edit Activity</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>