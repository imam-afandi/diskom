@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">   
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Foto Gallery</h1>
    </div>

    <div class="card">
    <!-- Content Row -->
    <div class="row">

         <!-- Notifikasi menggunakan flash session data -->
        <div class="card-body "width="80%">   
            <!-- Button trigger modal -->

        <div class="">
            <form action="/updatefoto/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="examplename">Nama Kategori</label>
                  <input value="{{ $data->judul }}" type="text" class="form-control" name="judul" id="judul">
                </div>
                <div class="form-group">
                  <label for="exampleslug">Foto Gallery</label>
                  <input value={{ $data->foto}} type="file" class="form-control" name="foto" id="foto">
                </div>
                <button type="submit" class="btn btn-success simpan"><i class="fas fa-save"></i> Update</button>
                <a href="/daftarfoto" class="btn btn-warning" ><i class="fas fa-reply"></i> Gallery Foto</a>
              </form>
        </div>

    </div>
    </div>
</div>
</div>

@endsection
