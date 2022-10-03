@extends('layouts.frontend.main')
@section ('berita')
        @foreach ($data_berita as $item)  
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="frontend/img/portfolio-1.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="frontend/img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <h5 class="lh-base mb-0">{{ $item['judul'] }}</a>
                        <p >{{ $item['excerpt'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
@endsection


