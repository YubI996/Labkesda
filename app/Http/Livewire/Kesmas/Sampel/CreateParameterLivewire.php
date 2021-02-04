<?php

namespace App\Http\Livewire\Kesmas\Sampel;

use Livewire\Component;
use App\User;
use App\Kmparameter;
use App\Regiskesmas;
use App\Kmsampel;
use App\Kmtransaksi;


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
            'RegisKesmas' => Regiskesmas::find($this->regiskesmasId),
            'parameter_fisika'       => Kmparameter::where('jenis',1)->get(),
            'parameter_wajib'        => Kmparameter::where('jenis',2)->get(),
            'parameter_tambahan'     => Kmparameter::where('jenis',3)->get(),
            'parameter_mikrobiologi' => Kmparameter::where('jenis',4)->get()
        ])
        ->extends('admin::layouts.app')
        ->section('main-content');
    }

    public function submit()
    {
        foreach($this->check_parameter as  $id=>$data){
           $get[] = (($id));

           $sampel = Kmsampel::create([
               'regiskesmas_id' => $this->regiskesmasId,
               'kmparameter_id' => $id,
               'hasil_pemeriksaan' => null
               ]);
               
        }

        if($this->regiskesmasId) {

            $regiskesmas = Regiskesmas::find($this->regiskesmasId);
            
            if($regiskesmas) {
                $regiskesmas->update([
                    'status_regis'     => 1
                ]);
            }
        }

        $Kmtransaksi = Kmtransaksi::create([
            'regiskesmas_id' => $this->regiskesmasId,
            'total_harga' => $this->total_harga,
        ]);


       
        return redirect()->route('kesmas.sampel');

    }
}
