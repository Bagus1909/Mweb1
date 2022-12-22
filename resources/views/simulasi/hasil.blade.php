@extends('layouts.main')
@section('container')
    <div class="container mt-5">
        <h1 class="mb-4">Hasil Hitung Cicilan</h1>
        <div class="mb-5">
            <label for="harga"><h3>Harga :</h3></label>
            <h4>{{ currency_IDR($harga) }}</h4>
            <label for="harga"><h3>Dp :</h3></label>
            <h4>{{ currency_IDR($hasil) }}</h4>
            <label for="harga"><h3>Pokok Kredit :</h3></label>
            <h4>{{ currency_IDR($pokokKredit) }}</h4>
            <label for="harga"><h3>Bunga :</h3></label>
            <h4>{{ currency_IDR($bunga) }}</h4>
            <label for="harga"><h3>Cicilan per Bulan :</h3></label>
            <h4>{{ currency_IDR($cicilan) }}</h4>
        </div> 
    </div>
@endsection