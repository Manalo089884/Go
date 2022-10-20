
<div wire:ignore.self id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    Home Banner
                </h2>
            </div>
            <form wire:submit.prevent="StoreBannerData">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    @csrf
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Title</label>
                        <input type="text" id="title" wire:model.lazy="title" class="form-control flex-1 @error('title') border-danger @enderror" placeholder="Banner title" >
                        <div class="text-danger mt-2">@error('title'){{$message}}@enderror</div>
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Status:</label>
                        <select wire:model.lazy="status"  class="form-select w-full"  >
                            <option value="">Select Status</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Active">Active</option>
                        </select>
                        <div class="text-danger mt-2">@error('status'){{$message}}@enderror</div>
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Image:</label>
                        <input type="file" wire:model.lazy="picture"  placeholder="text" class="form-control p-1 flex-1 @error('picture') border-danger @enderror">
                        <div class="text-danger mt-2">@error('picture'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button wire:click="closeModal" type="button" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
                    <input type="submit" class="btn btn-primary w-32" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>





