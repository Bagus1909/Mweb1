@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Produk</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="{{ url('/dashboard/produk') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="mobil_id" class="form-label">Nama</label>
            <select class="form-select form-control" name="mobil_id">
                @foreach ($mobils as $mobil)
                @if(old('mobil_id') == $mobil->id)
                    <option value="{{ $mobil->id }}" selected>{{ $mobil->name }}</option>
                @else
                    <option value="{{ $mobil->id }}">{{ $mobil->name }}</option>
                @endif
                @endforeach
            </select>
            
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="tipe" name="tipe" required value="{{ old('tipe') }}">
            @error('tipe')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="transmisi_id" class="form-label">Transmisi</label>
            <select class="form-select form-control" name="transmisi_id">
                @foreach ($transmisis as $item)
                @if(old('mobil_id') == $item->id)
                    <option value="{{ $item->id }}" selected>{{ $item->transmisi }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->transmisi }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" type-currency="IDR" placeholder="Rp " required>
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
        {{-- <button type="submit" class="btn btn-primary">Tambah Produuk</button> --}}
        {{-- <button type="submit" class="btn btn-primary">Tambah Produk</button> --}}
    </form>
</div>

@endsection