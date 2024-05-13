<div>
    <div class="col-sm-11 col-md-10 col-lg-6 mx-auto">
        <div class="bg-light py-md-3 px-4 mt-md-5 rounded">
            <h4 class="text-center my-3">Register for Free!</h4>      
            <form wire:submit.prevent='submitHandle'>
                <div class="mb-3">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" class="form-control" id="username" name="username" autocomplete="off" wire:model.live='username'>
                    @error('username')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off" wire:model.live='email'>
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image :</label>
                    <input type="file" class="form-control" id="image" name="image" wire:model='image'>
                    @if ($image)
                        <img class="pt-2" width="70" height="50" src="{{$image->temporaryUrl()}}" alt="">
                    @endif
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="password" name="password" wire:model.live='password'>
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary col-12">Login</button>
            </form>
        </div>
    </div>
</div>