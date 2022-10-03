@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pegawai</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
    <div class="row">
        
        <div class="col-xl">
         <!-- Notifikasi menggunakan flash session data -->

        <div class="card-body" >  
            
            <a href="/tambahpegawai" class="btn btn-success mb-4" >
                <i class="fas fa-plus fa-sm text-white-50"></i><span>    Tambah Pegawai</span>
            </a>
            <div class="input-group mb-3 justify-content">
                <form action="/daftarpegawai" methode="GET">
                    <div class="input-group-append">
                        <input type="text" class="form-control" placeholder="Cari Nama Pegawai...." name="search">
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
                        <th>Nama</th>
                        <th>Foto </th>
                        <th>Tempat Tanggal Lahir </th>
                        <th>Pangkat & Gol. Ruang </th>
                        <th>Jabatan </th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @forelse ($pegawai as $index => $item)
                    <tr>
                        <td>{{ $index + $pegawai->firstItem()}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>
                            <img src="{{ asset('fotopegawai/'.$item->foto)}}" style="width: 100px;">
                        </td>
                        <td>{{ $item->tempat_lahir}}, {{ $item->tanggal_lahir}} </td>
                        <td>{{ $item->pangkat_gol_ruang}}</td>
                        <td>{{ $item->jabatan->nama}}</td>
                        <td>
                            <a href="/tampilpegawai/{{ $item->id }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger hapuspegawai" data-id="{{ $item->id}}" nama="{{ $item->nama}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @empty
                            <tr>
                                <td class="text-center text-mute" colspan="7">Data Pegawai tidak tersedia</td>
                            </tr>
                    @endforelse
                 </tbody>
            </table>
            {{ $pegawai->links() }}
        </div>
                   
        </div>
    </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('.hapuspegawai').click(function(){
        var pegawaiid = $(this).attr('data-id');
        var nama = $(this).attr('nama');
        swal({
  title: "Yakin?",
  text: "Kamu akan menghapus pegawai dengan nama: "+nama+"",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/hapuspegawai/"+pegawaiid+""
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

