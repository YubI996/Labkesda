<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use App\User;
use App\KmParameterPemeriksaan;
use App\RegisKesmas;
use App\KmSampel;
use App\KmTransaksi;


class CreateParameterLivewire extends Component
{
    public $regiskesmasId;
    public $check_parameter = [];
    public $total_harga;

    public function mount($id)
    {
        $this->regiskesmasId = $id;
    }

    public function render()
    {
        
        $this->total_harga = array_sum($this->check_parameter);
        return view('livewire.kesmas.sampel.createparameter',[
            'parameter_fisika'       => KmParameterPemeriksaan::where('jenis',1)->get(),
            'parameter_wajib'        => KmParameterPemeriksaan::where('jenis',2)->get(),
            'parameter_tambahan'     => KmParameterPemeriksaan::where('jenis',3)->get(),
            'parameter_mikrobiologi' => KmParameterPemeriksaan::where('jenis',4)->get()
        ])
        ->extends('admin::layouts.app')
        ->section('main-content');
    }

    public function submit()
    {
        foreach($this->check_parameter as  $id=>$data){
           $get[] = (($id));

           $sampel = KmSampel::create([
               'id_regis_kesmas' => $this->regiskesmasId,
               'id_km_parameter_pemeriksaan' => $id,
               'hasil_pemeriksaan' => null
               ]);
               
        }

        if($this->regiskesmasId) {

            $regiskesmas = RegisKesmas::find($this->regiskesmasId);
            
            if($regiskesmas) {
                $regiskesmas->update([
                    'status_regis'     => 1
                ]);
            }
        }

        $kmtransaksi = KmTransaksi::create([
            'id_regis_kesmas' => $this->regiskesmasId,
            'total_harga' => $this->total_harga,
        ]);


       
        return redirect()->route('kesmas.sampel');

    }
}
