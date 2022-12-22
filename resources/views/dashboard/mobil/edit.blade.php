@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/mobil/{{ $cars->id }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Mobil</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name',$cars->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="mobil_spec" class="form-label">Spesifikasi Mobil</label>
            <input class="form-control" type="file" name="mobil_spec" id="mobil_spec">
          </div>

        <button type="submit" class="btn btn-primary">Update Mobil</button>
    </form>
</div>


@endsection