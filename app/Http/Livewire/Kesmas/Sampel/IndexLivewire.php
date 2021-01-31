<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use App\RegisKesmas;

class IndexLivewire extends Component
{
    public function render()
    {
        return view('livewire.kesmas.sampel.index',[
            'RegisKesmas' => RegisKesmas::all(),
        ])
        ->extends('admin::layouts.app')
        ->section('main-content');
    }
}
