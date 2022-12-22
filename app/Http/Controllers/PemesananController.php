<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Produk;
use App\Models\Transmisi;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $title = "Pemesanan";
        $cars = Mobil::all();
        return view('pemesanan.index', compact('title', 'cars'));
    }

    public function send(Request $request)
    {
        $mobil = $request->mobil;
        $tipe = $request->tipe;
        $transmisi = $request->transmisi;
        $noWa = 6281332948164;

        $newMobil = Mobil::select('name')
                    ->where('id', $mobil)
                    ->first();
        $newTransmisi = Transmisi::select('transmisi')
                    ->where('id', $transmisi)
                    ->first();
        $url = "https://api.whatsapp.com/send?phone=$noWa&text=Saya ingin memesan mobil Mitsubishi dengan %0AModel:%20$newMobil->name%0ATipe:%20$tipe%0ATransmisi:%20$newTransmisi->transmisi";

        return redirect($url);
    }
}
