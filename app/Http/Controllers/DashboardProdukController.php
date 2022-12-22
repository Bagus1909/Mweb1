<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Produk;
use App\Models\Transmisi;
use Illuminate\Http\Request;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view ('dashboard.produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobils = Mobil::all();
        $transmisis = Transmisi::all();
        return view ('dashboard.produk.create', compact('mobils', 'transmisis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mobil_id' => 'required',
            'tipe' => 'required',
            'transmisi_id' => 'required',
            'harga' => 'required|not_regex:/^Rp\s\d{1,3}(\.\d{3})*?$/',
        ]);

        Produk::create([
            'mobil_id' => $request->mobil_id,
            'tipe' => $request->tipe,
            'transmisi_id' => $request->transmisi_id,
            'harga' => currencyIDRToNumeric($request->harga)
        ]);

        return redirect('/dashboard/produk')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $produk = Produk::findorfail($produk->id);
        $mobils = Mobil::all();
        $transmisis = Transmisi::all();
        return view('dashboard.produk.edit',compact('produk', 'mobils', 'transmisis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $this->validate($request, [
            'mobil_id' => 'required',
            'tipe' => 'required',
            'transmisi_id' => 'required',
            'harga' => 'required'
        ]);

        $car = [
            'mobil_id' => $request->mobil_id,
            'tipe' => $request->tipe,
            'transmisi_id' => $request->transmisi_id,
            'harga' => currencyIDRToNumeric($request->harga)
        ];

        Produk::whereId($produk->id)->update($car);

        return redirect('/dashboard/produk')->with('success', 'Mobil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk = Produk::findorfail($produk->id);
        $produk->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
