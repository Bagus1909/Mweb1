@extends('dashboard.layouts.main')

@section('container')

@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
@endpush

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mobil</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-danger col-lg-6" role="alert">
        {{ session('delete') }}
    </div>
@endif

<div class="table-responsive col-lg">
    <a href="/dashboard/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
    <table class="table table-striped table-sm" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Tipe</th>
                <th scope="col">Transmisi</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->mobil->name }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>{{ $item->transmisi->transmisi }}</td>
                    <td>{{ currency_IDR($item->harga) }}</td>
                    <td>
                        <form action="{{ url('/dashboard/produk'. '/' . $item->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <a href="{{ url('/dashboard/produk/' . $item->id . '/edit') }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
                            <button type="submit" class="btn bg-gradient-danger btn-sm text-white" onclick="return confirm('Hapus Data ?')"><i class="fas fa-fw fa-trash"></i></button>
                        </form>
                        {{-- <a href="{{ route('dashboard.produk', $item->id) }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
                        {{-- <a href="/dashboard/produk/{{ $item->id }}/edit" class="badge bg-warning">Edit</a>
                        <form action="#" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Menghapus Produk ?')">Del</button> --}}
                        {{-- </form>
                        <form action="/dashboard/produk/{{ $item->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Menghapus Produk ?')">Del</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
            {{-- @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to Delete this post ?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@push('script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
@endpush

@endsection