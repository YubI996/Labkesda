<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hematologi = ['Darah Lengkap'=> 42500,'Hitung Jenis'=> 15500,'Laju Endap Darah'=> 14000,'Masa Perdarahan'=> 13500,'Masa Pembekuan'=> 13500,
        'Golongan Darah'=> 16500,'Hapusan Darah Tepi'=>50000];
        
        $urinalisa = ['Urin Lengkap'=> 18000];
        
        $immunologi = ['Widal'=>39000,'HBsAg'=>34500,'HIV'=>54500,'Dengue Test'=>140500,
        'Tes Kehamilan'=>19000,'Malaria Rapid Test'=>55000];
        
        $kimia_klinik = ['Glukosa Sewaktu'=>23000,'Glukosa Puasa'=>23000,'Glukosa 2JPP'=>23000,
        'Cholesterol'=>24000,'HDL Cholesterol'=>33500,'LDL Cholesterol'=>37500,'Trigliserida'=>25000,'Mikro Albumin'=>120000,'Bilirubin Total'=>23500,
        'Bilirubin Direct'=>24000,'Bilirubin Indirect'=>23500,'HbA1C'=>90500,'SGOT'=>24000,'SGPT'=>24000,'Ureum'=>24500,'Creatinin'=>26500,
        'Asam Urat'=>24000,'Total Protein'=>23500];
        
        $pewarnaan = ['Gram'=>17000,'Ziehl Nelsen (BTA, Kusta)'=>20000,'Giemsa'=>20000,'Filaria'=>20000,'Pembacaan Kroscek'=>4000];
        
        
        $toksikologi = ['Tes Narkoba(1 parameter)'=>34500];

        $mikrobiologi = ['Jamur (Kerokan Kulit)'=>100000,'Faeses Lengkap'=>18500,'Secret Vagina (Uretra)'=>25000];
        $coll = collect(['Hematologi'=>$hematologi,'Urinalisa'=>$urinalisa,'Immunologi'=>$immunologi,'Kimia Klinik'=>$kimia_klinik,'Pewarnaan'=>$pewarnaan,'Toksikologi'=>$toksikologi,'Mikrobiologi'=>$mikrobiologi]);
        // echo $coll;
        foreach($coll as $key=>$val){
            foreach ($val as $k => $v) {
                DB::table('parameters')->insert([
                   'nama_param' => $k,
                   'harga' => $v,
                   'kategori' => $key
               ]);
            }
        }
    }
}
