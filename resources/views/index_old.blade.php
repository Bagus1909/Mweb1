<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">


<title>Hello, world!</title>
</head>
<body>
{{-- Navbar --}}
@include('partials.navbar')

{{-- Caousel --}}
<div id="myCarousel" class="carousel slide shadow-lg" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay-image" style="background-image:url(img/Xpander.jpeg)"></div>        
            <div class="container-slider">
            <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="overlay-image" style="background-image:url(img/Pajero.jpeg)"></div>
            <div class="container-slider">
            <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
    
            <div class="container-slider">
            <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <div class="slideDown hidden-xs position-absolute top-100 start-50 translate-middle">
        <a href="#welcome" class="btn btn-large rounded-circle" style="background-color: #F00; color:white">
            <i class="bi bi-arrow-down"></i>
        </a >
    </div>
</div>


{{-- Welcome Text --}}
<section id="welcome" style="background-color: #f7f7f7" class="shadow section"> 
    <div class="row home-content justify-content-center pb-3">
        <article class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
            <h2 class="h2">Selamat Datang di Dealer Mitsubishi</h2>
            <p class="h5">PT. Borobudur Oto Mobil merupakan pusat penjualan mobil Mitsubishi yang berada di wilayah Kota Yogyakarta dan seluruh Jawa Tengah. Selalu memberikan pelayanan terbaik dengan proses yang mudah, cepat dan dapatkan penawaran harga terbaik dari kami dengan bunga rendah, proses cepat dan aman serta memiliki jaminan purna jual.</p>
            <p class="h5">Dengan profesional kami akan memberikan pelayanan terbaik dengan proses yang mudah dan cepat.</p>
            <a href="" class="btn btn-danger">Price List</a>
        </article>
    </div>
</section>

{{-- Banner --}}
<section class="banner-img" style="background-image: url(img/bg.jpg)">
    <div class="banner-content pt-5 px-5">
        <article>
            <h2 class="h2 mb-3">Mobil Terbaik Tahun Ini </h2>
            <p class="h5 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus officia sequi!</p>
            <p class="h5 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, dicta. Est deleniti quibusdam modi ipsum sequi temporibus sunt, esse obcaecati!</p>
            <p class="h5 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In optio ipsum doloremque, deleniti id assumenda!</p> 
        </article>
        <a href="#" class="btn btn-large mt-5" style="background-color: #F00; color:white;">Promo</a>
    </div>
    
</section>

{{-- Footer --}}
<section id="footer">
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
                <div class="col-xs-12 col-sm text-center" style="z-index:1 !important;">
                    &copy; Mitsubishi Jogja 2022 - All rights reserved
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
