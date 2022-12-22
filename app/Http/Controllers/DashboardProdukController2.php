<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Mobil;
use App\Models\Transmisi;
use App\Models\Car;
use App\Models\Varian;
use App\Models\Transmission;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $produk = Produk::join('new_expander', 'id', '=', );
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
        $varians = Varian::all();
        $transmissions = Transmission::all();
        return view ('dashboard.produk.create', compact('varians', 'transmissions', 'mobils', 'transmisis'));
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

        
        // dd($request->harga, currencyIDRToNumeric($request->harga));
        
        Produk::create([
            'mobil_id' => $request->mobil_id,
            'tipe' => $request->tipe,
            'transmisi_id' => $request->transmisi_id,
            'harga' => currencyIDRToNumeric($request->harga)
        ]);

        // Produk::create($validatedData,[
        //     currencyIDRToNumeric($request->harga)
        // ]);

        return redirect('/dashboard/produk')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findorfail($id);
        $mobils = Mobil::all();
        $transmisis = Transmisi::all();
        $varians = Varian::all();
        $transmissions = Transmission::all();
        return view('dashboard.produk.edit',compact('produk', 'mobils', 'transmisis', 'varians', 'transmissions'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        Produk::whereId($id)->update($car);

        return redirect('/dashboard/produk')->with('success', 'Mobil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = car::findorfail($id);
        $car->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
