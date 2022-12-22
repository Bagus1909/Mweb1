@extends('layouts.main')

@section('container')


{{-- Banner --}}
<section>
    <div class="banner-produk" style="background-image: url(img/banner_produk.jpg)">
        <div class="banner-text">
            <div class="h1 text-center align-center text-white position-absolute top-50 start-50 translate-middle"><marquee direction="left" width="auto">Produk Kami</marquee></div>
        </div>
    </div>
</section>


{{-- Price List --}}
{{-- <section class="row section-content my-5">  
    @foreach ($varian as $item)
    <h2 class="h2 text-center mb-5">{{ $item->name }}</h2>
    <div class="col-xs-12 col-sm-6 content-box left content-image text-center mb-5">
            <div class="content-img" data-animate="true" data-effect="fadeInUp">
                <div class="mediaWrapper">
                    <iframe src="https://www.youtube.com/embed/ybDjhyLEGMI" width="560" height="315" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
    </div>

    <div class="col-xs-12 col-sm-6 content-box right content-text">
        <div>
            @for ($i = $x; $i > 0; $i--) 
                {{ $i }}
            @endfor
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>                
                    <li><strong>Manual</strong>
                        <ul> 
                            @foreach ($nxmanual as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                            <li>GLS : Rp.999.9999</li>
                            <li>Exceed : Rp.999.9999</li>
                            <li>Sport : Rp.999.9999</li>
                            @foreach ($xcvt as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                        </ul>
                    </li>    
                    <li><strong>CVT</strong>
                        <ul>
                            <li>GLS : Rp.999.9999</li>
                            <li>Exceed : Rp.999.9999</li>
                            <li>Sport : Rp.999.9999</li>
                            <li>Ultimate : Rp.999.9999</li>
                            @foreach ($xcvt as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                        </ul>
                    </li>
                    <li><strong>Manual Transmission</strong>
                        <ul>
                            @foreach ($xmanual as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach

</section> --}}
<section class="row section-content my-5">  
    <div class="text-center mb-5">
        <h2 class="h2 text-center">New Xpander</h2>
        @if ($snxpander->mobil_spec)
            <a class="btn btn-sm btn-danger" href="{{ asset('storage/'. $snxpander->mobil_spec) }}">Download Spesifikasi lengkap</a>
        @endif
    </div>
    <div class="col-xs-12 col-sm-6 content-box left content-image text-center mb-5">
            <div class="content-img" data-animate="true" data-effect="fadeInUp">
                <div class="mediaWrapper">
                    <iframe src="https://www.youtube.com/embed/ybDjhyLEGMI" width="560" height="315" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
    </div>

    <div class="col-xs-12 col-sm-6 content-box right content-text">
        <div>
            {{-- @for ($i = $x; $i > 0; $i--) 
                {{ $i }}
            @endfor --}}
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>                
                    <li><strong>Manual</strong>
                        <ul> 
                            @foreach ($nxmanual as $item)
                                <li>{{ $item->tipe }} : {{ currency_IDR($item->harga) }}</li>
                            @endforeach
                        </ul>
                    </li>    
                    <li><strong>CVT</strong>
                        <ul>
                            @foreach ($nxcvt as $item)
                                <li>{{ $item->tipe }} : {{ currency_IDR($item->harga) }}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="row section-content my-4"> 
    <div class="text-center mb-5">
        <h2 class="h2 text-center">New Xpander Cross</h2>
        @if ($sxcross->mobil_spec)
            <a class="btn btn-sm btn-danger" href="{{ asset('storage/'. $sxcross->mobil_spec) }}">Download Spesifikasi lengkap</a>
        @endif
    </div>
    

    <div class="col-xs-12 col-sm-6 content-box left content-text ps-5">
        <div>
            
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>
                    <li><strong>Manual</strong>
                        <ul> 
                            @foreach ($xcrossm as $item)
                                <li>{{ $item->tipe }} : {{ currency_IDR($item->harga) }}</li>
                            @endforeach
                        </ul>
                    </li>    
                    <li><strong>CVT</strong>
                        <ul>
                            @foreach ($xcrosscvt as $item)
                                <li>{{ $item->tipe }} : {{ currency_IDR($item->harga) }}</li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- @foreach ($xcrossm as $item)
                        <li><strong>{{ $item->tipe }}</strong>
                            <ul>
                                <li>{{ currency_IDR($item->harga) }}</li>
                            </ul>
                        </li>
                    @endforeach  --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 content-box right content-image text-center ">
        <div class="content-img" data-animate="true" data-effect="fadeInUp">
            <div class="mediaWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/eX_S7y8NrFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
            </div>
        </div>
    </div>
</section>

<section class="row section-content my-4">  
    <div class="text-center mb-5">
        <h2 class="h2 text-center">New Triton</h2>
        @if ($striton->mobil_spec)
            <a class="btn btn-sm btn-danger" href="{{ asset('storage/'. $striton->mobil_spec) }}">Download Spesifikasi lengkap</a>
        @endif
    </div>
    <div class="col-xs-12 col-sm-6 content-box left content-image text-center mb-5">
            <div class="content-img" data-animate="true" data-effect="fadeInUp">
                <div class="mediaWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kl8CVt4Cemw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    </div>

    <div class="col-xs-12 col-sm-6 content-box right content-text">
        <div>
            {{-- @for ($i = $x; $i > 0; $i--) 
                {{ $i }}
            @endfor --}}
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>                
                    <li><strong>Manual</strong>
                        <ul> 
                            @foreach ($mtriton as $item)
                                <li>{{ $item->tipe }} : Rp.{{ currency_IDR($item->harga) }}</li>
                            @endforeach
                            {{-- <li>GLS : Rp.999.9999</li>
                            <li>Exceed : Rp.999.9999</li>
                            <li>Sport : Rp.999.9999</li> --}}
                            {{-- @foreach ($xcvt as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach --}}
                        </ul>
                    </li>    
                    <li><strong>CVT</strong>
                        <ul>
                            {{-- <li>GLS : Rp.999.9999</li>
                            <li>Exceed : Rp.999.9999</li>
                            <li>Sport : Rp.999.9999</li>
                            <li>Ultimate : Rp.999.9999</li> --}}
                            @foreach ($atriton as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li><strong>Manual Transmission</strong>
                        <ul>
                            @foreach ($xmanual as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="row section-content my-4"> 
    <div class="text-center mb-5">
        <h2 class="h2 text-center">New Pajero</h2>
        @if ($spajero->mobil_spec)
            <a class="btn btn-sm btn-danger" href="{{ asset('storage/'. $spajero->mobil_spec) }}">Download Spesifikasi lengkap</a>
        @endif
    </div>

    <div class="col-xs-12 col-sm-6 content-box left content-text ps-5">
        <div>
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>
                    <li><strong>Manual</strong>
                        <ul> 
                            @foreach ($mpajero as $item)
                                <li>{{ $item->tipe }} : Rp.{{ currency_IDR($item->harga) }}</li>
                            @endforeach
                            {{-- <li>GLS : Rp.999.9999</li>
                            <li>Exceed : Rp.999.9999</li>
                            <li>Sport : Rp.999.9999</li> --}}
                            {{-- @foreach ($xcvt as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li><strong>Automatic</strong>
                        <ul> 
                            @foreach ($apajero as $item)
                                <li>{{ $item->tipe }} : Rp.{{ currency_IDR($item->harga) }}</li>
                            @endforeach
                            {{-- <li>GLS : Rp.999.9999</li>
                            <li>Exceed : Rp.999.9999</li>
                            <li>Sport : Rp.999.9999</li> --}}
                            {{-- @foreach ($xcvt as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach --}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 content-box right content-image text-center ">
        <div class="content-img" data-animate="true" data-effect="fadeInUp">
            <div class="mediaWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/D-yTwf1yoH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section class="row section-content my-4">  
    <div class="text-center mb-5">
        <h2 class="h2 text-center">Outlander</h2>
        @if ($snxpander->mobil_spec)
            <a class="btn btn-sm btn-danger" href="{{ asset('storage/'. $snxpander->mobil_spec) }}">Download Spesifikasi lengkap</a>
        @endif
    </div>
    <div class="col-xs-12 col-sm-6 content-box left content-image text-center mb-5">
            <div class="content-img" data-animate="true" data-effect="fadeInUp">
                <div class="mediaWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/4dB_IJkiQHA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    </div>

    <div class="col-xs-12 col-sm-6 content-box right content-text">
        <div>
            {{-- @for ($i = $x; $i > 0; $i--) 
                {{ $i }}
            @endfor --}}
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>                
                    <li><strong>Phev</strong>
                        <ul> 
                            @foreach ($nxmanual as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                            {{-- @foreach ($xcvt as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach --}}
                        </ul>
                    </li>    
                    {{-- <li><strong>Manual Transmission</strong>
                        <ul>
                            @foreach ($xmanual as $item)
                                <li>{{ $item->tipe }} : Rp.{{ $item->harga }}</li>
                            @endforeach
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="row section-content my-4"> 
    <div class="text-center mb-5">
        <h2 class="h2 text-center">L300</h2>
        @if ($sl300->mobil_spec)
            <a class="btn btn-sm btn-danger" href="{{ asset('storage/'. $sl300->mobil_spec) }}">Download Spesifikasi lengkap</a>
        @endif
    </div>

    <div class="col-xs-12 col-sm-6 content-box left content-text ps-5">
        <div>
            
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>
                    @foreach ($ml300 as $item)
                        <li><strong>{{ $item->tipe }} {{ $item->transmisi->transmisi }}</strong>
                            <ul>
                                <li>{{ currency_IDR($item->harga) }}</li>
                            </ul>
                        </li>
                    @endforeach 
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 content-box right content-image text-center ">
        <div class="content-img" data-animate="true" data-effect="fadeInUp">
            <div class="mediaWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MnMd9niuZjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

{{-- <section class="row section-content my-4"> 
    <h2 class="h2 text-center mb-5">New Xpander Cross</h2>
    

    <div class="col-xs-12 col-sm-6 content-box left content-text ps-5">
        <div>
            
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>
                    @foreach ($xcross as $item)
                        <li><strong>{{ $item->tipe }}</strong>
                            <ul>
                                <li>Rp.{{ $item->harga }}</li>
                            </ul>
                        </li>
                    @endforeach 
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 content-box right content-image text-center ">
        <div class="content-img" data-animate="true" data-effect="fadeInUp">
            <div class="mediaWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/D-yTwf1yoH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="row section-content my-4"> 
    <h2 class="h2 text-center mb-5">Pajero Sport</h2>

    
    <div class="col-xs-12 col-sm-6 content-box right content-image text-center ">
        <div class="content-img" data-animate="true" data-effect="fadeInUp">
            <div class="mediaWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/D-yTwf1yoH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 content-box left content-text ps-5">
        <div>
            
            <div data-animate="true" data-effect="fadeInUp" class="animated fadeInUp">
                <ul>
                    @foreach ($pajero as $item)
                        <li><strong>{{ $item->tipe }}</strong>
                            <ul>
                                <li>Rp.{{ $item->harga }}</li>
                            </ul>
                        </li>
                    @endforeach 
                </ul>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="row content-section ">
    <div class="col-xl-6 justify-content-center align-center content-img">
        <img src="{{ asset('img/Xpander.jpeg') }}" alt="" class="img-fluid p-5">
    </div>
    <div class="col content-text">
        <h2>Xpander 2022</h2>
    </div>
</section>  --}}

@endsection