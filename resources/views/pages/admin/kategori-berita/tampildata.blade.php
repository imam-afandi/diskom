@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">   
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kategori Berita</h1>
    </div>

    <div class="card">
    <!-- Content Row -->
    <div class="row">

         <!-- Notifikasi menggunakan flash session data -->
        <div class="card-body "width="80%">   
            <!-- Button trigger modal -->

        <div class="">
            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="examplename">Nama Kategori</label>
                  <input value="{{ $data->nama }}" type="text" class="form-control" name="nama" id="namakategori">
                </div>
                <div class="form-group">
                  <label for="exampleslug">Slug Kategori</label>
                  <input value={{ $data->slug }} type="text" class="form-control" name="slug" id="slugkategori">
                </div>
                <button type="submit" class="btn btn-success simpan"><i class="fas fa-save"></i> Update</button>
                <a href="/kategoriberita" class="btn btn-warning" ><i class="fas fa-reply"></i> Kategori</a>
              </form>
        </div>

    </div>
    </div>
</div>
</div>

@endsection