<div class="col-xl-5">
    <form wire:submit.prevent="login">

        <div class="form-group">
            <label class="font-weight-bold">ALAMAT EMAIL</label>
            <input type="text" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="Alamat Email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold">PASSWORD</label>
            <input type="password" wire:model.lazy="password"
                class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
    </form>
</div>