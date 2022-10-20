<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\ProductImage;

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
use App\Models\ProductImage;

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
        $this->modelId = $modelId;
=======
        $this->modelId = $modelId;   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        $this->modelId = $modelId;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }

    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $product = Product::onlyTrashed()->find($this->modelId);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        $image = ProductImage::where('product_id', '=' , $product->id )->get();

       foreach ($image as $item) {
            unlink(public_path('product_images/'.$item->images));
      }
        $product->forcedelete();
        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $product->name.' was successfully deleted!',
            'title' => 'Record Deleted',
        ]);

<<<<<<< HEAD
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
=======
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
}
