@extends('layouts.admin')
@section ('content')

<div class="container">   

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
    <div class="row">
        
        <div class="col-xl">
         <!-- Notifikasi menggunakan flash session data -->

        <div class="card-body" >   
           

                    <form action="/daftarpegawai" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="examplename">Nama Pegawai</label>
                            <input required type="text" class="form-control" name="nama" id="namapegawai" placeholder="Masukkan Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="examplename">NIP</label>
                            <input required type="text" class="form-control" name="nip" id="nippegawai" placeholder="Masukkan Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="exampleslug">Tempat Lahir</label>
                            <input required type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleslug">Tanggal Lahir</label>
                            <input required type="Date" class="form-control" name="tanggal_lahir" id="datepicker" placeholder="Masukkan Slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleslug">Pangkat & Gol. Ruang</label>
                            <select required name="pangkat_gol_ruang" class="form-control">
                                <option>II/a - Pengatur muda </option>
                                <option>II/b - Pengatur Muda Tingkat I </option>
                                    <option>II/c - Pengatur </option> 
                                        <option>II/d - Pengatur tingkat I </option>
                                            <option>III/a - Penata Muda </option>
                                                <option>III/b - Penata Muda Tingkat 1 </option>
                                                    <option>III/c - Penata </option>
                                                        <option>III/d - Penata Tingkat I </option>
                                                            <option>IV/a - Pembina</option>
                                                                <option>IV/b - Pembina Tingkat I  </option>
                                                                    <option>IV/c - Pembina Muda </option>
                                                                        <option>IV/d - Pembina Madya </option>
                                                                            <option>IV/e - Pembina Utama</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="examplename">Jabatan</label>
                            <select required name="jabatan_id" class="form-control">
                                <option value=""> -- Pilih --</option>
                                @foreach ($jabatan as $items)
                                <option value="{{ $items->id}}">{{ $items->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tusi">Tugas dan Fungsi</label>
                            <textarea required type="text" class="form-control" name="tugas_fungsi" id="summernote" rows="8">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="fotopegawai">Masukkan Foto Pegawai</label>
                            <input required type="file" class="form-control" name="foto" placeholder="belum ada foto yang diupload">
                        </div>
                        <button type="submit" class="btn btn-success simpanpegawai">Simpan</button>
                        <a href="/daftarpegawai" class="btn btn-danger"><i class="fas fa-reply"></i> Batal</a>
                    </form>
        </div>
    </div>
    </div>
</div>

@endsection
@section('script')
<script>

        <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</script>
<script>

$('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
</script>

@endsection