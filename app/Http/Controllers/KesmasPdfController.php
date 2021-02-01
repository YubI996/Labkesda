<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmparameter;
use App\User;
use App\Regiskesmas;
use App\Kmsampel;
use App\Kmtransaksi;
use PDF;

class KesmasPdfController extends Controller
{
    public function struk($id){

        $RegisKesmas = Regiskesmas::findOrFail($id);
        // $KmSampel = KmSampel::where('regiskesmas_id',$id)->get();
        $KmTransaksi = Kmtransaksi::where('regiskesmas_id',$id)->pluck('total_harga');

        $pdf = PDF::loadview('kesmas.pdf.pdfstruk',compact('RegisKesmas','KmTransaksi'))->setPaper('a4', 'landscape');

        return $pdf->stream('struk-pembayaran-kesmas.pdf');
    }
}
