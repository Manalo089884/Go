<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
<<<<<<< HEAD
use App\Models\ProductImage;

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
<<<<<<< HEAD
        $this->modelId = $modelId;
=======
        $this->modelId = $modelId;   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    }

    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $product = Product::onlyTrashed()->find($this->modelId);
<<<<<<< HEAD
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
=======
            $product->forcedelete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $product->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
        
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');  
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    }
}
