@extends('layouts.frontend.test')
@section('isi')
<div class="container">
    <div class="content-about wow fadeInUp" data-wow-delay="0.8s"">
<h1>Halaman About</h1>  
<h3>{{ $nama }}</h3>  
<p>{{ $email }}</p>
<img src="frontend/img/{{ $image }}" alt="{{$nama}}" width="200">
</div>
</div>
@endsection

