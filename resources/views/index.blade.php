@extends('layouts.main')

@section('container')
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
            <a href="/produk" class="btn btn-danger">Price List</a>
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

@endsection