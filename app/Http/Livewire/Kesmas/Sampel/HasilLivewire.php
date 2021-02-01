<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use App\Kmsampel;
use App\Regiskesmas;

class HasilLivewire extends Component
{
    public $regiskesmasId;
    public $hasil=[];

    public function mount($id)
    {
        $this->regiskesmasId = $id;
    }

    public function render()
    {
        return view('livewire.kesmas.sampel.hasil',[
            'RegisKesmas' => Regiskesmas::find($this->regiskesmasId),
        ]) 
        ->extends('admin::layouts.app')
        ->section('main-content');
    }

    public function updateHasil()
    {
        $regiskesmas = Regiskesmas::find($this->regiskesmasId);

        foreach($this->hasil as  $id=>$data1){
        $data = [
            'hasil_pemeriksaan' => $this->hasil,
        ];
        }
        $regiskesmas->parameter()->updateExistingPivot();
           
    }

    
}
