@extends('layouts.admin')
@section ('content')

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
    <div class="row">
        
        <div class="col-xl">
         <!-- Notifikasi menggunakan flash session data -->

        <div class="card-body" >   
           

                    <form action="/daftarberita" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="examplename">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judulberita" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label for="exampleslug">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slugberita" placeholder="Masukkan Slug">
                        </div>
                        <div class="form-group">
                            <label for="examplename">Kategori</label>
                            <select name="kategori_id" class="form-control">
                                <option value=""> -- Pilih --</option>
                                @foreach ($kategori as $items)
                                <option value="{{ $items->id}}">{{ $items->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleslug">Isi Berita</label>
                            <textarea type="text" class="form-control" name="body" id="bodycontent" rows="8"></textarea>
                        </div>
                       <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                       <div class="form-group">
                        <label for="example">Singkatan Isi Berita</label>
                        <input type="text" class="form-control" name="excerpt" placeholder="Masukkan Singkatan">
                        </div>
                        <div class="form-group">
                            <label for="example">Masukkan Gambar</label>
                            <input type="file" class="form-control" name="foto" placeholder="belum ada foto yang diupload">
                        </div>
                        <button type="submit" class="btn btn-success simpan">Simpan</button>
                        <a href="/daftarberita" class="btn btn-danger"><i class="fas fa-reply"></i> Batal</a>
                    </form>
        </div>
    </div>
    </div>
</div>

@endsection
@section('script')
<script>
    ClassicEditor
        .create( document.querySelector( '#bodycontent' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection