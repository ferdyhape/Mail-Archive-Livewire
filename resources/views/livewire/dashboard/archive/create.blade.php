<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-archive-modal">Archive
        mail</button>

    <!-- Modal -->
    <div class="modal fade" wire:ignore.self id="add-archive-modal" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Archive New Mail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text"
                                class="form-control form-control-user @error('mail_number') is-invalid @enderror"
                                wire:model="mail_number" placeholder="Mail Number" required autofocus>
                            @error('mail_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

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

                        <div class="form-group mb-3">
                            <select class="form-control @error('category_id') is-invalid @enderror"
                                wire:model="category_id" required>
                                <option>Choose a category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <select class="form-control @error('activity_id') is-invalid @enderror"
                                wire:model="activity_id" required>
                                <option>Choose a activity</option>
                                @foreach($activities as $activity)
                                <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                                @endforeach
                            </select>
                            @error('activity_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control @error('file') is-invalid @enderror" type="file" id="formFile"
                                wire:model="file" required>
                            @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click.prevent="store()" type="submit" class="btn btn-primary ">Archive
                        Mail</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var add-archive-modal = document.getElementById('add-archive-modal');
        
            add-archive-modal.addEventListener('show.bs.modal', function (event) {
                  // Button that triggered the modal
                  let button = event.relatedTarget;
                  // Extract info from data-bs-* attributes
                  let recipient = button.getAttribute('data-bs-whatever');
                // Use above variables to manipulate the DOM
            });
    </script>
</div>