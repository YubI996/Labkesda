<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Parameter;
use DateTime;

class DaftarKlinik extends Component
{
    public $userDatas = [];
    public $paramTerpilih = [];
    public $total;

    // public Collection $Params;
    // public Collection $paramTerpilih;
    public function mount()
    {
        $this->Params = Parameter::get()->groupBy('kategori');
        $this->reloadData();
    }
    public function render()

    {
        if (array_key_exists("tgll",$this->userDatas))
        {
            $tgll = date_create($this->userDatas['tgll']);
            $this->userDatas['usia'] = date_diff($tgll,date_create('now'))->y;
        }
        if (!(empty($this->paramTerpilih))){
            $this->total = array_sum($this->paramTerpilih);
            // $this->total = "Rp. ".number_format($this->total,0,',','.');
        }

        $params = Parameter::get()->groupBy('kategori');   
        return view('livewire.daftar-klinik', compact('params')
        )->extends('admin::layouts.app')
              ->section('main-content');
    }
     public function reloadData()
    {
        $this->paramTerpilih = null;
        $this->Params = Parameter::get()->groupBy('kategori');

    }
     public function save_params()
    {
        // dump($this->userDatas);
        // dump($this->paramTerpilih);
        // dump($this->total);
    }

}
