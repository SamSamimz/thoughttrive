<div>
    <div class="col-sm-11 col-md-10 col-lg-6 mx-auto">
        <div class="bg-light py-md-3 px-4 mt-md-5 rounded">
            <h4 class="text-center my-3">You must be login first!</h4>      
            @if (session()->has('message'))
            <div class="alert alert-danger text-center">{{ session('message') }}</div>
            @endif
            <form wire:submit.prevent='handleLogin'>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off" wire:model='email'>
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="password" name="password" wire:model='password'>
                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary col-12">Login</button>
            </form>
        </div>
    </div>
</div>

