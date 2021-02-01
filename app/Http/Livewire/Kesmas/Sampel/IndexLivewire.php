<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use App\Regiskesmas;

class IndexLivewire extends Component
{
    public function render()
    {
        return view('livewire.kesmas.sampel.index',[
            'RegisKesmas' => Regiskesmas::all(),
        ])
        ->extends('admin::layouts.app')
        ->section('main-content');
    }
}
