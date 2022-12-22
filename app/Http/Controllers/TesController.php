<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    public function index()
    {
        $transmisis = DB::table('produks')
                ->join('transmisis', 'transmisi_id', '=', 'transmisis.id')
                ->select('produks.transmisi_id','transmisis.transmisi')
                ->where('mobil_id',1)
                ->where('tipe','GLS')
                ->get(); 

        $harga = DB::table('produks')
                ->select('produks.harga')
                ->where('mobil_id', 1)
                ->where('tipe', 'GLS')
                ->where('transmisi_id', 1)
                ->first();

                $snxpander = Mobil::where('id', 1)
                ->select('mobil_spec')
                ->get();

        dd($snxpander);
    }
}
