@extends('layouts.main')    
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('container')
    <div class="container pb-4">
        <h1>Simulasi Kredit Mobil Mitsubishi</h1>
        <form action="/hasil" method="post">
            @csrf
            <div class="mb-3">
                <label for="mobil" class="form-label">Pilih Mobil</label>
                <select class="form-select form-control" name="mobil" id="mobil">
                    <option value="">---Pilih Mobil---</option>
                    @foreach ($cars as $p)
                    @if(old('p_id') == $p->id)
                        <option value="{{ $p->id }}" selected>{{ $p->name }}</option>
                    @else
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Pilih Tipe</label>
                <select class="form-select form-control" name="tipe" id="tipe">
                    
                </select>
            </div>
            <div class="mb-3">
                <label for="transmisi" class="form-label">Pilih Transmisi</label>
                <select class="form-select form-control" name="transmisi" id="transmisi">
    
                </select>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dp" class="form-label">DP</label>
                <select class="form-select form-control" name="dp" id="dp">
                    <option value="10">10 %</option>
                    <option value="15">15 %</option>
                    <option value="20">20 %</option>
                    <option value="25">25 %</option>
                    <option value="30">30 %</option>
                    <option value="35">35 %</option>
                    <option value="40">40 %</option>
                    <option value="45">45 %</option>
                    <option value="50">50 %</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tenor" class="form-label">Tenor</label>
                <select class="form-select form-control" name="tenor" id="tenor">
                    <option value="1">1 Tahun</option>
                    <option value="2">2 Tahun</option>
                    <option value="3">3 Tahun</option>
                    <option value="4">4 Tahun</option>
                    <option value="5">5 Tahun</option>
                    <option value="6">6 Tahun</option>
                    <option value="7">7 Tahun</option>
                    <option value="8">8 Tahun</option>
                    <option value="9">9 Tahun</option>
                    <option value="10">10 Tahun</option>
                </select>
            </div>
            <button class="btn btn-success">Hitung</button>
        </form>
    </div>
@endsection
@push('script')
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $.ajaxSetup({
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $(function() {
            $('#mobil').on('change', function() {

                let mobil = $('#mobil').val();
    
                $.ajax({
                    url : "{{ url('/getTipe') }}",
                    type : "POST",
                    cache : false,
                    data : {
                        mobil:mobil,
                        _token : '{!! csrf_token() !!}'
                    },
    
                    success: function(msg) {
                        $('#tipe').html(msg);
                    },
                    error: function(data) {
                        console.log('error :', data);
                    },
                })
            })
            $('#tipe').on('change', function() {

                let mobil = $('#mobil').val();
                let tipe = $('#tipe').val();

                console.log(mobil, tipe);
    
                $.ajax({
                    url : "{{ url('/getTransmisi') }}",
                    type : "POST",
                    cache : false,
                    data : {
                        mobil:mobil,
                        tipe:tipe,
                        _token : '{!! csrf_token() !!}'
                    },
    
                    success: function(msg) {
                        $('#transmisi').html(msg);
                    },
                    error: function(data) {
                        console.log('error :', data);
                    },
                })
            })
            $('#transmisi').on('change', function() {

                let mobil = $('#mobil').val();
                let tipe = $('#tipe').val();
                let transmisi = $('#transmisi').val();

                console.log(mobil, tipe, transmisi);
    
                $.ajax({
                    url : "{{ url('/getHarga') }}",
                    type : "POST",
                    cache : false,
                    data : {
                        mobil:mobil,
                        tipe:tipe,
                        transmisi:transmisi,
                        _token : '{!! csrf_token() !!}'
                    },
    
                    success: function(data) {
                        $('#harga').val(data);
                    },
                    error: function(data) {
                        console.log('error :', data);
                    },
                })
            })
        })
    })
</script>

@endpush