<div>
    <form wire:submit.prevent="StoreUserData">
        @csrf
        <div class="p-5">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label for="name" class="form-label">Display Name</label>
                        <input id="name" wire:model.lazy="name" type="text" class="form-control  @error('name') border-danger @enderror" placeholder="Input text">
                        <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" wire:model.lazy="email" type="email" class="form-control  @error('email') border-danger @enderror" placeholder="Input text" >
                        <div class="text-danger mt-2">@error('email'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role</label>
                        <select wire:model.lazy ="role" id="role" class="form-select  @error('role') border-danger @enderror">
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger mt-2">@error('role'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select  id="gender" wire:model.lazy="gender" class="form-select @error('gender') border-danger @enderror">
                            <option value="">Select Role</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <div class="text-danger mt-2">@error('gender'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div class="mt-3 xl:mt-0">
                        <label for="age" class="form-label">Age</label>
                        <input id="age" wire:model.lazy="age" type="number" class="form-control @error('age') border-danger @enderror" placeholder="Input text">
                        <div class="text-danger mt-2">@error('age'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input id="phone" wire:model.lazy="phone" type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Input text" >
                        <div class="text-danger mt-2">@error('phone'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="address" class="form-label">Address</label>
                        <input id="address" wire:model.lazy="address" type="text" class="form-control @error('address') border-danger @enderror" placeholder="Input text" >
                        <div class="text-danger mt-2">@error('address'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" wire:model.lazy="password" type="text" class="form-control @error('password') border-danger @enderror" placeholder="Input text" >
                        <div class="text-danger mt-2">@error('password'){{$message}}@enderror</div>
                    </div>


                </div>
                <div class="col-span-12 xl:col-span-6">
                    <label for="prole" class="form-label">Profile Picture</label>
                    <input type="file" wire:model.lazy="picture" class="form-control w-full">
                    @if($picture)
                        <img src="{{ $picture->temporaryUrl() }}" data-action="zoom" class="mt-2" width="200"  alt="">
                    @endif
                    <div class="text-danger mt-2">@error('picture'){{$message}}@enderror</div>
                    <div wire:loading wire:target="picture" wire:key="picture">Uploading....</div>
                </div>
            </div>
            <div class="text-right mt-5">
                <a href="{{Route('user.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                <button type="submit" class="btn btn-primary w-24 mt-3">Save</button>
            </div>
        </div>
    </form>
</div>
