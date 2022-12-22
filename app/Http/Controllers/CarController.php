<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Varian;
use App\Models\Transmission;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view ('dashboard.produk.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varians = Varian::all();
        $transmissions = Transmission::all();
        return view ('dashboard.produk.create', compact('varians', 'transmissions'));
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
            'varian_id' => 'required',
            'tipe' => 'required',
            'transmission_id' => 'required',
            'harga' => 'required',
        ]);
        
        Car::create($validatedData);

        return redirect('/dashboard/produk')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $cars = $car;
        $varians = Varian::all();
        $transmissions = Transmission::all();
        return view('dashboard.produk.edit',compact('cars', 'varians', 'transmissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $this->validate($request, [
            'varian_id' => 'required',
            'tipe' => 'required',
            'transmission_id' => 'required',
            'harga' => 'required'
        ]);

        $car = [
            'varian_id' => $request->varian_id,
            'tipe' => $request->tipe,
            'transmission_id' => $request->transmission_id,
            'harga' => $request->harga
        ];

        Car::whereId($id)->update($car);

        return redirect('/dashboard/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car = car::findorfail($id);
        $car->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
