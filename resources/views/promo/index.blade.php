@extends('layouts.main')

@section('container')
<section>
    <div class="banner-produk" style="background-image: url(img/bg.jpg)">
        <div class="banner-text">
            <marquee class="h1" direction="right" scrollamount="5" behavior="scroll" bgcolor="#999">This text will scroll from right to left at a speed of 5 pixels per second and will continue to scroll even when the mouse pointer is over it</marquee>
            <div width class="h1 text-center align-center text-white position-absolute top-50 start-50 translate-middle"><marquee direction="left" width="100%">Produk Kami</marquee></div>
        </div>
    </div>
</section>
@endsection