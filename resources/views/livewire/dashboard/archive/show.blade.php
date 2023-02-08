<div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalShow-{{$mail->id}}">
        <i class="fa-solid fa-eye"></i>
    </button>

    <!-- Modal -->
    <div class="modal modalShow fade" id="modalShow-{{$mail->id}}" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">{{ $mail->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="{{asset('storage/'. $mail->file )}}" class="rounded my-3">
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>