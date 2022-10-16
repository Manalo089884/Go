<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;
class DeleteBanner extends Component
{
    public $modelId;
    protected $listeners = [
        'getModelDeleteModalId',
        'refreshChild' => '$refresh',
        'forceCloseModal',
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
        $home = Home::find($this->modelId);

        Storage::delete('public/banner/'.$home->featured_image);
        $home->delete();
        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $home->name.' was successfully deleted!',
            'title' => 'Record Deleted',
        ]);

        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }
    public function render()
    {
        return view('livewire.modal.delete-banner');
    }
}
