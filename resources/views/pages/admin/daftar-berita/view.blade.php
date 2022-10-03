@extends('layouts.admin')
@section ('content')

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Berita</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
    <div class="row">
        
        <div class="col-xl">
         <!-- Notifikasi menggunakan flash session data -->

        <div class="card-body" >   
           <div class="align-center">
                    <div>  
                        <h1 align=center>{{ $post->judul }}</h1>
                    </div>
                    <div class="mb-4 mt-3">
                        {{ $post->user->name}} | {{ $post->kategori->nama }} | {{ $post->created_at->diffForHumans() }}
                    </div>
                    <div>  
                        <img src="{{ asset('fotoberita/'.$post->foto)}}" style="width: 100%;" height="10%">
                    </div>
                    <div class="mt-3 mb-2"> 
                         {!! $post->body !!}
                    </div>
                    <div> 
                        <a href="/daftarberita" class="btn btn-success" ><i class="fas fa-arrow-left"></i> Daftar Berita</a>
                   </div>
           </div>
        </div>
    </div>
    </div>
</div>

@endsection
