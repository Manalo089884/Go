<div>
    <form wire:submit.prevent="StoreSupplierData">
        @csrf
        <div class="p-5">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label for="name" class="form-label">Supplier Name</label>
                        <input wire:model.lazy="name" type="text" placeholder="Please Enter Supplier Name" class="form-control @error('name') border-danger @enderror"  >
                        <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input wire:model.lazy="email" name="email" type="text" placeholder="Please Enter Supplier Email Address" class="form-control @error('email') border-danger @enderror"  >
                        <div class="text-danger mt-2">@error('email'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div class="mt-3 xl:mt-0">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input wire:model.lazy="contact" type="text" placeholder="Please Enter Supplier Contact Number" class="form-control @error('contact') border-danger @enderror">
                        <div class="text-danger mt-2">@error('contact'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="address" class="form-label">Address</label>
                        <input wire:model.lazy="address" type="text" placeholder="Please Enter Supplier Address" class="form-control @error('address') border-danger @enderror">
                        <div class="text-danger mt-2">@error('address'){{$message}}@enderror</div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-5">
                <a href="{{Route('supplier.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                <button type="submit" class="btn btn-primary w-24 mt-3">Save</button>
            </div>
        </div>
    </form>
</div>
