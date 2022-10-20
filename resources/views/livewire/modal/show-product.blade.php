
<div wire:ignore.self id="ShowProductModal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    Product Information
                </h2>
            </div>
            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Product Name:</label>
                    <label class="form-label">{{ $name }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Category Name:</label>
                    <label class="form-label">{{ $category }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Brand Name:</label>
                    <label class="form-label">{{ $brand }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Brand Name:</label>
                    <label class="form-label">{{ $supplier }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Cost Price:</label>
                    <label class="form-label">₱{{ $cprice }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Selling Price:</label>
                    <label class="form-label">₱{{ $sprice }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">SKU:</label>
                    <label class="form-label">{{ $sku }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Weight:</label>
                    <label class="form-label">{{ $weight }}g</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Stock:</label>
                    <label class="form-label">{{ $stock }}pcs</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Stock:</label>
                    <label class="form-label">{{ $stock }}</label>
                </div>
                <div class="col-span-12">
                    <label for="modal-form-1" class="form-label font-medium">Description:</label>
                    <label class="form-label">{!! $description !!}</label>
                </div>
            </div>
            <div class="modal-footer text-right">
                <button wire:click="closeModal" type="button" class="btn btn-outline-secondary w-32 mr-1">Dismiss</button>
            </div>
        </div>
    </div>
</div>

