<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use App\Regiskesmas;

class IndexLivewire extends Component
{
    public $regiskesmasId;
    public function render()
    {
        return view('livewire.kesmas.sampel.index',[
            'RegisKesmas' => Regiskesmas::all(),
        ])
        ->extends('admin::layouts.app')
        ->section('main-content');
    }

    public function modal()
    {
        $this->emit('openDeleteConfirmationSampel');
    }

    public function resetInputFields()
    {
        $this->regiskesmasId = '';
    }

    public function cancel()
    {
        $this->resetInputFields();
    }

    public function destroyModalSampel($id)
    {
        $Regiskesmas = Regiskesmas::where('id',$id)->first();
        $this->regiskesmasId = $id;
    }

    public function destroySampel()
    {
        if($this->regiskesmasId) {
            $Regiskesmas = Regiskesmas::find($this->regiskesmasId);
            $Regiskesmas->delete();
        }

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');


    }
}
