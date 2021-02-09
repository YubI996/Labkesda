<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Parameter;
use App\RegisKlinik as user;
use App\Transaksi as trans;
use App\Parameter_Transaksi as pivot;
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
    
    // public function validate()
    // {
    //     if((!(empty($this->userDatas))) && (!(empty($this->paramTerpilih)))){
    //         save_user();
    //         save_params();
    //     }
    // }
    public function save_user()
    {
        $save_user = user::create([
            'nama'          => $this->userDatas['nama'],
            'jenis_kelamin' =>  $this->userDatas['Jenis Kelamin'],
            'tgll'          =>  $this->userDatas['tgll'],
            'usia'          =>  $this->userDatas['usia'],
            'alamat'        =>  $this->userDatas['alamat'],
            'no_hp'         =>  $this->userDatas['no_hp'],
            'pengirim'      =>  $this->userDatas['pengirim'],
            'dokter'        =>  $this->userDatas['dokter'],
            'jaminan'       =>  $this->userDatas['jaminan'],
            'no_regis'      =>  $this->userDatas['no_regis'],
            'tgl_regis'    =>  $this->userDatas['tgl_daftar']
        ]);
        $save_trans = trans::create([
            'regis_klinik_id' => $save_user->id,
            'total' => $this->total,
            'status_bayar' => 0
        ]);
        foreach ($this->paramTerpilih as $key => $value) {
            $save_param = pivot::create([
                'transaksi_id' => $save_trans->id,
                'parameter_id' => $key,
                'hasil' => '']);
        }
    }


}
