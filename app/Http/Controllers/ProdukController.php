<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Mobil;
use App\Models\Pajero;
use App\Models\NewExpander;
use App\Models\NewExpanderCross;
use App\Models\Varian;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $title = 'Produk';
        $x = DB::table('mobils')->count();
        

        $varian = varian::all();
        $produk = Produk::all();
        $nxmanual = Produk::where('mobil_id', '1')
                    ->where('transmisi_id', '1')
                    ->get();
        $nxcvt = Produk::where('mobil_id', '1')
                    ->where('transmisi_id','3')
                    ->get();
        $snxpander = Mobil::where('id', 1)
                    ->select('mobil_spec')
                    ->first();
        $xcrossm = Produk::where('mobil_id', '2')
                    ->where('transmisi_id', '1')
                    ->get();
        $xcrosscvt = Produk::where('mobil_id', '2')
                    ->where('transmisi_id', '3')
                    ->get();
        $sxcross = Mobil::where('id', 2)
                    ->select('mobil_spec')
                    ->first();
        $mtriton = Produk::where('mobil_id', '4')
                    ->where('transmisi_id', '1')
                    ->get();
        $atriton = Produk::where('mobil_id', '4')
                    ->where('transmisi_id', '2')
                    ->get();
        $striton = Mobil::where('id', 4)
                    ->select('mobil_spec')
                    ->first();
        $mpajero = Produk::where('mobil_id', '3')
                    ->where('transmisi_id','1')
                    ->get();
        $apajero = Produk::where('mobil_id', '3')
                    ->where('transmisi_id','2')
                    ->get();
        $spajero = Mobil::where('id', 3)
                    ->select('mobil_spec')
                    ->first();
        $ml300 = Produk::where('mobil_id', '6')
                    ->where('transmisi_id','1')
                    ->get();
        $sl300 = Mobil::where('id', 6)
                    ->select('mobil_spec')
                    ->first();
        return view ('produk.index',compact('title', 'varian', 'produk','nxmanual','nxcvt', 'snxpander', 'xcrossm', 'xcrosscvt', 'sxcross', 'mtriton', 'atriton', 'striton', 'mpajero', 'apajero', 'spajero', 'ml300', 'sl300'));
    }
}
