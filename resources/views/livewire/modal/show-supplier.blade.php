
<div wire:ignore.self id="ShowSupplierModal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    Supplier Information
                </h2>
            </div>
            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Name:</label>
                    <label class="form-label">{{ $name }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Email:</label>
                    <label class="form-label">{{ $email }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Contact Number:</label>
                    <label class="form-label">{{ $contact }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Address:</label>
                    <label class="form-label">{{ $contact }}</label>
                </div>
            </div>
            <div class="modal-footer text-right">
                <button wire:click="closeModal" type="button" class="btn btn-primary w-32 mr-1">Return</button>
            </div>
        </div>
    </div>
</div>

