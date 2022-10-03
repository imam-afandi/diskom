@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Galeri Foto</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
    <div class="row">
        
        <div class="col-xl">
         <!-- Notifikasi menggunakan flash session data -->

        <div class="card-body" >  
            
            <button type="button" href=""  class="btn btn-success mb-4" data-toggle="modal" data-target="#tambahdata" >
                <i class="fas fa-plus fa-sm text-white-50"></i><span>    Tambah Galeri Foto</span>
            </button>


            <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
            <div class="modal-content">
        <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tambah Foto Gallery</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
        <div class="modal-body">
            <form action="/daftarfoto" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="examplename">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judulfoto" placeholder="Masukkan Judul" required >
                    </div>
                    <div class="form-group">
                        <label for="fotogalleri">Masukkan Foto Gallery</label>
                        <input required type="file" class="form-control" name="foto" placeholder="belum ada foto yang diupload">
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


            <div class="input-group mb-3 justify-content">
                <form action="/daftarfoto" methode="GET">
                    <div class="input-group-append">
                        <input type="text" class="form-control" placeholder="Cari Judul...." name="search">
                        <button class="btn btn-danger" type="submit" ><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message}}
              </div>
            @endif
           
        <div class="table-responsive">
            <table class="table table-striped" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto </th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @forelse ($fotogallery as $index => $item)
                    <tr>
                        <td>{{ $index + $fotogallery->firstItem()}}</td>
                        <td>{{ $item->judul}}</td>
                        <td>
                            <img src="{{ asset('fotogallery/'.$item->foto)}}" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/editfoto/{{ $item->id }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger hapusfoto" data-id="{{ $item->id}}" nama="{{ $item->judul}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @empty
                            <tr>
                                <td class="text-center text-mute" colspan="7">Data Foto Gallery tidak tersedia</td>
                            </tr>
                    @endforelse
                 </tbody>
            </table>
            {{ $fotogallery->links() }}
        </div>
                   
        </div>
    </div>
    </div>
</div>
@endsection
@section('script')
<script>
$('.hapusfoto').click(function(){
    var galleryfotoid = $(this).attr('data-id');
    var judul = $(this).attr('nama');
    swal({
title: "Yakin?",
text: "Kamu akan menghapus gallery foto dengan judul: "+judul+"",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
window.location = "/hapusfoto/"+galleryfotoid+""
swal("Data Berhasil dihapus", {
  icon: "success",
});
} else {
swal("Data tidak jadi dihapus");
}
});

});
</script>
@endsection

