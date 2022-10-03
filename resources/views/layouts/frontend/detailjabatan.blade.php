@extends('layouts.frontend.index')
@section('content')
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-md-4 col-lg-8 justify-content-center">
                <div class="judul wow fadeInUp" data-wow-delay="0.3s">  
                    <h3  style="text-align: left"> {{ $post->judul }}</h3>
                </div>
                <div class="mt-3 py-2 text-primary">
                    {{ $post->user->name}} | {{ $post->kategori->nama }} | {{ $post->created_at->diffForHumans() }}
                </div>
                <div class="justify-content-center">
                    <img src="{{ asset('fotoberita/'.$post->foto)}}" style="width: 100% ;" >
                </div>
                <div class=" wow fadeInUp mt-4 justify-content" style="text-align: justify" data-wow-delay="0.5s  "> 
                            {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection