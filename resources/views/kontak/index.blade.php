@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-around my-3">
            <div class="col-4">
                <img src="/img/logo1.png" alt="">
                <h1 class="h1">Mitsubishi Jogja</h1>
                <strong class="fs-6">Jl. Kolonel Sugiyono No.69 Brontokusuman Kec. Mergangsan Kota Yogyakarta, Daerah Istimewa Yogyakarta 55153, Indonesia</strong>
                <p>0215489421</p>
            </div>
            <div class="col-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3499746738253!2d110.35933871438272!3d-7.752654994412362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a590d1721129d%3A0x5292bc1577683bb3!2sMITSUBISHI%20BOROBUDUR%20OTO%20MOBIL!5e0!3m2!1sid!2sid!4v1661490669378!5m2!1sid!2sid" width="500" height="600" style="border:0;" \></iframe>
            </div>
        </div>

        <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=6281332948164&text=Hai%0Ates%20pesan." target="blank">Chat whatsapp</a>
        
        
        <div class="row justify-content-md-center">
            <div class="col-6">
                    <form action="#" method="POST" target="_blank">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="noWa" value="6281332948164">
                        <button type="submit" name="submit" class="btn btn-danger">Kirim</button>
                    </form>
            </div>
        </div>
    </div>
    
@endsection