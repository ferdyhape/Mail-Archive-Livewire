<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#edit-archive-modal-{{$mail->id}}"><i class="fa-solid fa-pen-to-square"></i></button>

    <!-- Modal -->
    <div class="modal fade" wire:ignore.self id="edit-archive-modal-{{$mail->id}}" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Edit Mail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text"
                                class="form-control form-control-user @error('mail_number') is-invalid @enderror"
                                wire:model.defer="mail_number" placeholder="Mail Number" required autofocus>
                            @error('mail_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

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

                        <div class="form-group mb-3">
                            <select class="form-control @error('category_id') is-invalid @enderror"
                                wire:model.defer="category_id" required>
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
                                wire:model.defer="activity_id" required>
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
                        <iframe src="{{asset('storage/'. $mail->file )}}" class="rounded mb-3" width="100%"
                            height="100%">
                        </iframe>
                        <div class="form-group mb-3">
                            <input class="form-control @error('newFile') is-invalid @enderror" type="file" id="formFile"
                                wire:model="newFile">
                            @error('newFile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="hidden" wire:model="file">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click.prevent="update()" type="submit" class="btn btn-primary ">Archive
                        Mail</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>