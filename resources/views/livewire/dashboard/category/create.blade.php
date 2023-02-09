<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal">Add
        Category</button>

    <!-- Modal -->
    <div class="modal fade" wire:ignore.self id="add-category-modal" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text"
                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                wire:model="name" placeholder="Name" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click.prevent="store()" type="submit" class="btn btn-primary ">Add Category</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>