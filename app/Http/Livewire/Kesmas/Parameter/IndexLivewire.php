<?php

namespace App\Http\Livewire\Kesmas\Parameter;

use Livewire\Component;
use Livewire\WithPagination;
use App\Kmparameter;

class IndexLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $parameterId, $nama, $jenis, $harga;
    public $search = '';
    public $updateMode = false;

    
    public function render()
    {
        return view('livewire.kesmas.parameter.index',[
            'parameter_fisika'       => Kmparameter::where('jenis',1)
                                        ->where('nama', 'like', '%'.$this->search.'%')
                                        ->paginate(5),
            'parameter_wajib'        => Kmparameter::where('jenis',2)
                                        ->where('nama', 'like', '%'.$this->search.'%')
                                        ->paginate(5),
            'parameter_tambahan'     => Kmparameter::where('jenis',3)
                                        ->where('nama', 'like', '%'.$this->search.'%')                            
                                        ->paginate(5),
            'parameter_mikrobiologi' => Kmparameter::where('jenis',4)
                                        ->where('nama', 'like', '%'.$this->search.'%')                            
                                        ->paginate(5)
            ])->extends('admin::layouts.app')
              ->section('main-content');
              
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    private function resetInputFields()
    {
        $this->nama = '';
        $this->jenis = '';
        $this->harga = '';
    }

    public function parameterStore()
    {
        $this->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric'
        ]);
        $parameter = Kmparameter::create([
            'nama' => $this->nama,
            'jenis'=> $this->jenis,
            'harga'=> $this->harga
        ]);

        $this->resetInputFields();
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function modal()
    {
        $this->emit('openModalParameter');
        $this->emit('openDeleteConfirmationParameter');
    }

    public function editParameter($id)
    {
        $this->updateMode = true;
        $parameter = Kmparameter::where('id',$id)->first();
        $this->parameterId = $id;
        $this->nama = $parameter->nama;
        $this->jenis = $parameter->jenis;
        $this->harga = $parameter->harga;
        
    }

    public function updateParameter()
    {
        $validatedDate = $this->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric'
        ]);

        if ($this->parameterId) {
            $parameter = Kmparameter::find($this->parameterId);
            $parameter->update([
                'nama' => $this->nama,
                'jenis'=> $this->jenis,
                'harga'=> $this->harga
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Data Parameter Berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function destroyModalParameter($id)
    {
        $parameter = Kmparameter::where('id',$id)->first();
        $this->parameterId = $id;
        
    }

    public function destroyParameter()
    {
        if($this->parameterId) {
            $parameter = Kmparameter::find($this->parameterId);
            $parameter->delete();
        }

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');


    }
}
