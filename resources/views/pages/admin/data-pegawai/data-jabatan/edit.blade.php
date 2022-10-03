@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">   
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Nama Jabatan</h1>
    </div>

    <div class="card">
    <!-- Content Row -->
    <div class="row">

         <!-- Notifikasi menggunakan flash session data -->
        <div class="card-body "width="80%">   
            <!-- Button trigger modal -->

        <div class="">
            <form action="/updatejabatan/{{ $jabatan->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="examplename">Nama Jabatan</label>
                  <input value="{{ $jabatan->nama }}" type="text" class="form-control" name="nama" id="namakategori">
                </div>
                <button type="submit" class="btn btn-success simpan"><i class="fas fa-save"></i> Update</button>
                <a href="/daftarjabatan" class="btn btn-danger" ><i class="fas fa-reply"></i> Jabatan</a>
              </form>
        </div>

    </div>
    </div>
</div>
</div>

@endsection