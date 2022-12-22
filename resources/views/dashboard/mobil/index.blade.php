@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mobil</h1>
</div>

<div class="table-responsive">
    <table class="table table striped">
        <thead>
            <tr>
                <th></th>
                <th>Model</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td></td>
                    <td>{{ $car->name }}</td>
                    <td>
                        <form action="{{ url('/dashboard/mobil'. '/' . $car->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <a href="{{ url('/dashboard/mobil/' . $car->id . '/edit') }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
                            <button type="submit" class="btn bg-gradient-danger btn-sm text-white" onclick="return confirm('Hapus Data ?')"><i class="fas fa-fw fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection