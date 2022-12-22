<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@stack('meta')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">


<title>Mitsubishi | {{ $title }}</title>
</head>
<body>
{{-- Navbar --}}
@include('partials.navbar')

<div>
    @yield('container')
</div>

{{-- Footer --}}
<section class="stiky-bottom">
    <section id="footer" class="pt-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="alamat col-md-4 p-3">
                    <h3>Kontak</h3>
                    <ul class="list-unstyled">
                        <li>Mitsubishi Jogja</li>
                        <li>Jl. Kolonel Sugiyono No.69 Brontokusuman Kec. Mergangsan Kota Yogyakarta, Daerah Istimewa Yogyakarta 55153, Indonesia</li>
                        <li>
                        <a href="tel:6281327554411">62 813-2755-4411</a><br>
                        </li>
                        <li><a href="mailto:yoeyoenbahtiari@gmail.com">yoeyoenbahtiari@gmail.com</a></li>
                    </ul>
                </div>
                <div class="sosmed col-md-4 p-3">
                    <h3>Sosial Media</h3>
                    <a href="" class="h2 mx-2"><i class="facebook bi bi-facebook"></i></a>
                    <a href="" class="h2 mx-2"><i class="instagram bi bi-instagram"></i></a>
                    <a href="" class="h2 mx-2"><i class="whatsapp bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Copyright --}}
    <section>
        <div class="container-fluid footer-bottom bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm text-center text-black" style="z-index:1 !important;">
                        &copy; <a class="text-black" style="text-decoration: none;" href="{{ route('login') }}">Mitsubishi Jogja 2022</a> - All rights reserved
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Option 1: Bootstrap Bundle with Popper -->
@stack('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
