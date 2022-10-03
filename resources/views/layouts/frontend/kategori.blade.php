@extends('layouts.frontend.test')
@section('judul')
<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Detail Berita</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Detail Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('isi')
<div class="container">
    <div class="judul wow fadeInUp" data-wow-delay="0.3s">  
        <h1 align=center>Post Kategori : {{ $kategori->nama }}</h1>
    </div>
    <div class="row g-4 portfolio-container">
        @foreach ($posts as $item)  
        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ url('frontend/img/portfolio-1.jpg') }}" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-square btn-outline-light mx-1" href="{{ url('frontend/img/portfolio-1.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="bg-light p-2">
                    <h3 class="lh-base mb-3">{{ $item->judul }}</h3>
                    <p >{{ $item['excerpt'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
