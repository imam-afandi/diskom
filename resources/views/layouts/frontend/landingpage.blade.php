@extends('layouts.frontend.index')
@section('content')   <!-- Navbar Start -->
    
<div class="hero-header">	
    <img src="{{ url('frontend/img/hero2.png') }}" width='100%' height="100%" class="align-top img-hero" alt="">
</div>    
        <section id="layanan">
          <div class="  container-xxl py-5" >
            <div class="container py-2 px-lg-5">
               
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-secondary justify-content-center"><span></span>Layanan<span></span></h4>
                    <h2 class="text-center mb-5">Layanan Diskominfo Tolitoli</h2>
                </div>
                <div class="row g-4 layanan">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class=" feature-item bg-light rounded text-center p-4 gbr">
                            <a href="https://jdih.tolitolikab.go.id" target="_blank">
                            <img src="frontend/img/JDIH.png" alt="JDIH">
                            <h5 class="mb-3">JDIH</h5>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class=" feature-item bg-light rounded text-center p-4 gbr">
                            <a  href="https://www.lapor.go.id/" target="_blank">
                            <img src="frontend/img/lapor.png" alt="SP4N LAPOR">
                            <h5 class="mb-3">SP4N LAPOR</h5></a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" feature-item bg-light rounded text-center p-4 gbr">
                            <a  href="https://ppid.tolitolikab.go.id/" target="_blank">
                            <img src="frontend/img/PPID.png" alt="PPID">
                            <h5 class="mb-3">PPID</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Layanan End -->

         <!-- Unit Kerja start-->
        <section id="unitkerja">
            <div class="py-4 bg-light">
                <div class="container py-3 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="section-title text-secondary justify-content-center"><span></span>Unit Kerja<span></span></h4>
                        <h2 class="text-center mb-5">Unit Kerja Diskominfo Tolitoli</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon1 flex-shrink-0">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Kepala Dinas</h5>
                                <p class="m-0">Kepala Dinas Komunikasi dan Informatika mempunyai tugas membantu Bupati melaksanakan Urusan Pemerintahan bidang Komunikasi dan Informatika.</p>
                                <a class="btn btn-square" href="/detailunitkerja/1"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon2 flex-shrink-0">
                                  <i class="fa fa-clipboard fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Sekertaris</h5>
                                <p class="m-0">Sekretaris mempunyai tugas melaksanakan tugas pengelolaan administrasi urusan umum, program, keuangan dan asset. </p>
                                <a class="btn btn-square" href="/detailunitkerja/2"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon3 flex-shrink-0">
                                    <i class="fas fa-print fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Bidang Pengelolaan dan Layanan Informasi Publik </h5>
                                <p class="m-0">Mempunyai tugas penyiapan bahan perumusan kebijakan, pembinaan, koordinasi, fasilitasi, evaluasi serta pelaporan terhadap penyelenggaraan di bidang Pengelolaan dan Layanan Informasi Publik.</p>
                                <a class="btn btn-square" href="/detailunitkerja/3"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon4 flex-shrink-0">
                                    <i class="fa fa-university fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Bidang Penyelenggaraan <br>e-government</h5>
                                <p class="m-0">Mempunyai tugas penyiapan bahan perumusan kebijakan, pembinaan, koordinasi, fasilitasi, evaluasi serta pelaporan terhadap penyelenggaraan di bidang Penyelenggaraan E-Government.</p>
                                <a class="btn btn-square" href="/detailunitkerja/4"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon5 flex-shrink-0">
                                    <i class="fa fa-signal fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Bidang Hubungan Media dan Layanan Informatika</h5>
                                <p class="m-0">Mempunyai tugas penyiapan bahan perumusan kebijakan, pembinaan, koordinasi, fasilitasi, evaluasi serta pelaporan terhadap penyelenggaraan di bidang Hubungan Media dan Layanan Informatika.</p>
                                <a class="btn btn-square" href="/detailunitkerja/5"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon6 flex-shrink-0">
                                    <i class="fa fa-users fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Kelompok Jabatan Fungsional</h5>
                                <p class="m-0">Mempunyai tugas melaksanakan sebagian tugas Dinas Komunikasi dan Informatika sesuai dengan bidang jabatan fungsional masing-masing berdasarkan Peraturan Perundang-undangan</p>
                                <a class="btn btn-square" href="/detailunitkerja/6"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- Unit Kerja End -->
<!-- Button trigger modal -->

             <!-- Berita Start -->
    <section id="berita">
        <div class="container-xxl">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-secondary justify-content-center"><span></span>Berita<span></span></h4>
                    <h2 class="text-center mb-5">Berita Diskominfo Tolitoli</h2>
                </div>
                <div class="row g-4">
                    @foreach ($data_berita as $item)  
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('fotoberita/'.$item->foto)}}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('fotoberita/'.$item->foto)}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-2">
                                {{ $item->user->name}} | {{ $item->kategori->nama }} | {{ $item->created_at->diffForHumans() }}
                                <h3 class="lh-base mb-3">{{ $item->judul }}</h3>
                                <p >{{ $item['excerpt'] }}</p>
                                <a class="btn btn-info text-white rounded-pill mb-3" href="{{'/detail/'.$item->slug}}">Read more..</i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
    </section>
        <!-- Berita End -->               

      
        <section id="galleryfoto">
        <div class=" py-1 bg-light">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-secondary justify-content-center"><span></span>Galeri Foto<span></span></h4>
                    <h2 class="text-center mb-5">Galeri Foto Diskominfo Tolitoli</h2>
                </div>
                <div class="row g-4">
                    @foreach ($gallery as $galeri)  
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('fotogallery/'.$galeri->foto)}}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('fotogallery/'.$galeri->foto)}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-2">
                                <h5 class="lh-base mb-3">{{ $galeri->judul }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
    </section>

        <section id="galeryvideo">
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="section-title text-secondary justify-content-center"><span></span>Gallery Video<span></span></h4>
                        <h2 class="text-center mb-5">Gallery Video Diskominfo Tolitoli</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/video1.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/-3fxaRTTXD8" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">Aksi Bergizi#Hidup Sehat, Remaja Glowing Penuh Prestasi#</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/video2.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/vhP3JOm8Nq4" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">UPACARA PERINGATAN HUT KE-77 REPUBLIK INDONESIA KAB. TOLITOLI TAHUN 2022</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/video3.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/wbG6CWguJaU" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">MEMPERINGATI 17 AGUSTUS 2022# KAB. TOLITOLI GELAR LOMBA GERAK JALAN TKT SD & SMP</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/video4.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/Xw2t3u5erGg" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">PENGUKUHAN CALON PASUKAN PENGIBAR BENDERA PUSAKA KAB. TOLITOLI TAHUN 2022</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/video5.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/RVYXNXhLhoc" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">PENGUKUHAN KETUA TIM PERCEPATAN PENURUNAN STUNTING KECAMATAN/KELURAHAN DAN DESA TAHUN 2022</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/video6.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/A_TlYAUdeqQ" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">REMBUK STUNTING BERSAMA TIM PENGGERAK PKK KAB. TOLITOLI</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>


        <section id="podcast">
            <div class="bg-light py-4">
                <div class="container py-3 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="section-title text-secondary justify-content-center"><span></span>Podcast<span></span></h4>
                        <h2 class="text-center mb-5">Podcast Diskominfo Tolitoli</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/podcast1.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/p4w70w996bI" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">BUDAYA QALBU#PENTINGNYA MEMEGANG TEGUH AMANAH</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/podcast2.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/bKkbdFy9BO0" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">BUDAYA QALBU || KEADILAN MENGANTARKAN SUATU NEGERI PADA KEMANDIRIAN DAN KESEJAHTERAAN</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/podcast3.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/gnjc_BkREiM" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">BUDAYA QALBU || MAKNA BERQURBAN DIHARI RAYA IDUL ADHA</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/podcast4.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/CjEYmGEOgi0" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">RUANG DISKUSI || STRATEGI PENCEGAHAN PMK MENYAMBUT HARI RAYA QURBAN</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/podcast5.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/mvig1RBmM_k" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">RUANG DISKUSI ## MENINGKATKAN NILAI JUAL DENGAN INOVASI</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/podcast6.jpg')}}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="https://youtu.be/JLh_6bRL4HQ" data-toggle="lightbox" data-gallery="youtubevideos"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-2">
                                    <h5 class="lh-base mb-3">RUANG DISKUSI || PENTINGNYA DAMPAK PMPRB TERHADAP KINERJA PEMERINTAH DAERAH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>


 


        <!-- Team Start -->
        <section id="team">
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-secondary justify-content-center"><span></span>Team Work<span></span></h4>
                    <h2 class="text-center mb-5">Team Work Diskominfo Tolitoli</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="frontend/img/kadis.jpg" alt="">
                                <h5>RUDY BANTILAN, S.Sos., M.Si.</h5>
                                <span>Kepala Dinas Kominfo Tolitoli</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="frontend/img/male.png" alt="">
                                <h5>MUH. SURYA MAISAR, SE., M.Si.</h5>
                                <span>Sekertaris</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img height="75%" class="img-fluid rounded-circle mb-4" src="frontend/img/male.png" alt="">
                                <h5>A. SUHERMAN, S.Kom</h5>
                                <span>Kepala Bidang Penyelenggaraan E-gov</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Team End -->
@endsection
        