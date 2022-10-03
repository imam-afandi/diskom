@extends('layouts.admin')
@section ('content')
<!-- Begin Page Content -->

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Berita</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
    <div class="row">
        
        <div class="col-xl">
         <!-- Notifikasi menggunakan flash session data -->

        <div class="card-body" >  
            
            <a href="/tambahberita" class="btn btn-success mb-4" >
                <i class="fas fa-plus fa-sm text-white-50"></i><span>    Tambah Berita</span>
            </a>
            <div class="input-group mb-3 justify-content">
                <form action="/daftarberita" methode="GET">
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
                        <th>Slug </th>
                        <th>Kategori </th>
                        <th>Author </th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @forelse ($berita as $index => $item)
                    <tr>
                        <td>{{ $index + $berita->firstItem()}}</td>
                        <td>{{ $item->judul}}</td>
                        <td>
                            <img src="{{ asset('fotoberita/'.$item->foto)}}" style="width: 100px;">
                        </td>
                        <td>{{ $item->slug}}</td>
                        <td>{{ $item->kategori->nama}}</td>
                        <td>{{ $item->user->name}}</td>
                        <td>
                            <a href="/viewberita/{{ $item->slug }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="/editberita/{{ $item->id }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger hapusberita" data-id="{{ $item->id}}" nama="{{ $item->judul}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @empty
                            <tr>
                                <td class="text-center text-mute" colspan="7">Data Berita tidak tersedia</td>
                            </tr>
                    @endforelse
                 </tbody>
            </table>
            {{ $berita->links() }}
        </div>
                   
        </div>
    </div>
    </div>
</div>



@endsection

