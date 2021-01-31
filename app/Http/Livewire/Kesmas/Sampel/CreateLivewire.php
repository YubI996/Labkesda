<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use Illuminate\Support\Str;
use App\KmParameterPemeriksaan;
use App\User;
use App\RegisKesmas;
use App\KmSampel;

class CreateLivewire extends Component
{
    public $no_regis,$nama,$alamat,$pengirim;
    public $jenis_sampel,$tgl_sampling,$tgl_penerima,$deskripsi_sampel;
    

    public function render()
    {
        
        // $this->total_sementara = array_sum($this->check_parameter);
        return view('livewire.kesmas.sampel.create')
            ->extends('admin::layouts.app')
            ->section('main-content');
    }

    private function resetInputFields(){
        $this->no_regis = '';
        $this->nama = '';
        $this->alamat = '';
        $this->pengirim = '';
        $this->jenis_sampel = '';
        $this->tgl_sampling = '';
        $this->tgl_penerima = '';
        $this->deskripsi_sampel = '';
    }

    public function storeSampel()
    {
        
        
        $no= Str::random(40);

        $regis = RegisKesmas::create([
            'no_regis'         => $no,
            'nama'             => $this->nama,
            'alamat'           => $this->alamat,
            'pengirim'         => $this->pengirim,
            'jenis_sampel'     => $this->jenis_sampel,
            'tgl_sampling'     => $this->tgl_sampling,
            'tgl_penerima'     => $this->tgl_penerima,
            'status_regis'     => 0,
            'deskripsi_sampel' => $this->deskripsi_sampel
        ]);

        $this->resetInputFields();

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('kesmas.sampel');
    }

}
