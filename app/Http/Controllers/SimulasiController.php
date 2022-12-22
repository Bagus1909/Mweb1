<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimulasiController extends Controller
{
    public function index() 
    {
        // $data = Produk::select(['car_id', DB::raw('CONCAT_WS(" ", type, trans_id) AS varian')])
        //         ->get();
        $title = 'Simulasi';
        $cars = DB::table('mobils')
                ->select('name', 'id')
                ->get();

        return view('simulasi.index', compact('title', 'cars'));
    }

    public function getTipe(Request $request)
    {
        $mobil = $request->mobil;

        $tipes = Produk::select('tipe')
                ->where('mobil_id', $mobil)
                ->distinct()->get();

        $option = "<option value=''>---Pilih Tipe---</option>"; 
        
        foreach ($tipes as $tipe){
           $option .="<option value='$tipe->tipe'>$tipe->tipe</option>";
        }
         echo $option;
    }

    public function getTransmisi(Request $request)
    {
        $mobil = $request->mobil;
        $tipe = $request->tipe;

        $transmisis = DB::table('produks')
        ->join('transmisis', 'transmisi_id', '=', 'transmisis.id')
        ->select('produks.transmisi_id','transmisis.transmisi')
        ->where('mobil_id',$mobil)
        ->where('tipe',$tipe)
        ->get(); 

        $option = "<option value=''>---Pilih Tipe---</option>"; 
        
        foreach ($transmisis as $transmisi){
           $option .="<option value='$transmisi->transmisi_id'>$transmisi->transmisi</option>";
        }
         echo $option;
    }
    public function getHarga(Request $request)
    {
        $mobil = $request->mobil;
        $tipe = $request->tipe;
        $transmisi = $request->transmisi;

        $harga = DB::table('produks')
                ->select('produks.harga')
                ->where('mobil_id', $mobil)
                ->where('tipe', $tipe)
                ->where('transmisi_id', $transmisi)
                ->first();

         echo $harga->harga;
    }

    public function hitung(Request $request)
    {
        $title = 'Hasil';
        $harga = $request->harga;
        $dp = $request->dp;
        $tenor = $request->tenor;

        $dp = $dp/100;
        $tenor = $tenor*12;

        
        $hasil = $harga*$dp;
        $pokokKredit = $harga - $hasil;
        $bunga = (6/100)*$pokokKredit;
        $cicilan = ($pokokKredit + $bunga)/$tenor;
        
        return view ('simulasi.hasil', compact('title', 'harga', 'hasil', 'pokokKredit', 'bunga', 'cicilan'));

    }
}
