<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductImage;

class ForceDeleteProduct extends Component
{
    public $modelId;
    public function render()
    {
        return view('livewire.modal.force-delete-product');
    }
    protected $listeners = [
        'getModelDeleteModalId',
        'forceCloseModal',
        'refreshChild' => '$refresh',
    ];
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    private function cleanVars(){
        $this->modelId = null;
    }

    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }

    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $product = Product::onlyTrashed()->find($this->modelId);
        $image = ProductImage::where('product_id', '=' , $product->id )->get();

       foreach ($image as $item) {
            unlink(public_path('product_images/'.$item->images));
      }
        $product->forcedelete();
        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $product->name.' was successfully deleted!',
            'title' => 'Record Deleted',
        ]);

        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }
}
