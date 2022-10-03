<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    @include('includes.style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.navbar')

                @yield('content')   

            </div>
            <!-- End of Main Content -->

            @include('includes.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                   <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Logout</button>
                </form>
                </div>
            </div>
        </div>
    </div>

   @include('includes.script')

</body>
@yield('scriptvalidasi')
<script>

$('.tega').click(function(){
        var nama = document.getElementById("namakategori").value;
        var slug = document.getElementById("slugkategori").value;
        if(nama == "" || slug == ""){
            swal("Maaf!", "Form tidak boleh kosong", "warning");
        }
        else{
            swal("Good job!", "Data Kategori Berhasil di Simpan", "success");
        }
    });

    $('.hapuskategori').click(function(){
        var kategoriid = $(this).attr('data-id');
        var namakategori = $(this).attr('nama');
        swal({
  title: "Yakin?",
  text: "Kamu akan menghapus data kategori "+namakategori+"",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/hapusdata/"+kategoriid+""
    swal("Data Berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

    });

    /** Succes simpan Kategori**/
$('.simpan').click(function(){
swal("Selamat", "Data Berhasil di Simpan", "success");
});


$('.hapusberita').click(function(){
        var beritaid = $(this).attr('data-id');
        var judul = $(this).attr('nama');
        swal({
  title: "Yakin?",
  text: "Kamu akan menghapus berita dengan judul: "+judul+"",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/hapusberita/"+beritaid+""
    swal("Data Berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

    });

$('.hapusjabatan').click(function(){
        var jabatanid = $(this).attr('data-id');
        var nama = $(this).attr('nama');
        swal({
  title: "Yakin?",
  text: "Kamu akan menghapus jabatan dengan nama: "+nama+"",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/hapusjabatan/"+jabatanid+""
    swal("Data Berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

    });
   
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

@yield('script')
</html>