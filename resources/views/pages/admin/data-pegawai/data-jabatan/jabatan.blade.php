@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Jabatan</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
        <div class="row">
            <div class="col-xl">
                <div class="card-body" >   
                    <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#tambahdata">
                        <i class="fas fa-plus fa-sm text-white-50"></i><span>    Tambah Jabatan</span> </button>
                        <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
            <div class="modal-body">
                <form action="/daftarjabatan" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="examplename">Nama Jabatan</label>
                            <input type="text" class="form-control" name="nama" id="namakategori" placeholder="Masukkan Nama" required >
                        </div>
                    <button type="submit" class="btn btn-success tega">Simpan</button>
                </form>
            </div>
        <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
            </div>
                </div>
                    </div>


        <div class="table-responsive mt-4">
            <table class="table table-striped" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr >
                        <th>No</th>
                        <th>Nama Jabatan</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @php $no = 1; 
                    @endphp
                    @forelse ($jabatan as $item)
                    <tr>
                        <td >{{$no++ }}</td>
                        <td >{{ $item->nama}}</td>
                        <td>
                            <a href="/editjabatan/{{ $item->id }}" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger hapusjabatan" data-id="{{ $item->id}}" nama="{{ $item->nama}}" data-toggle="tooltip" data-placement="right" title="Hapus"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @empty
                            <tr>
                                <td class="text-center text-mute" colspan="3">Data Jabatan tidak tersedia</td>
                            </tr>
                    @endforelse
                 </tbody>
            </table>
        </div>

        </div>
    </div>
    </div>
</div>

@endsection
@section('script')
<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endsection
  