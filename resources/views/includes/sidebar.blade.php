<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-2">Diskominfo Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-newspaper fa-2x"></i>
            <span>Berita</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Custom Berita:</h6> 
                <a class="collapse-item" href="/kategoriberita">Kategori Berita</a>
                <a class="collapse-item" href="/daftarberita">Daftar Berita</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user-tie"></i>
            <span>Data Pegawai</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Data Pegawai:</h6>
                <a class="collapse-item" href="/daftarjabatan">Data Jabatan</a>
                <a class="collapse-item" href="/daftarpegawai">Data Pegawai</a>
            </div>
        </div>
    </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDIP"
            aria-expanded="true" aria-controls="collapseDIP">
            <i class="fas fa-info-circle"></i>
            <span>Daftar Informasi Publik</span>
        </a>
        <div id="collapseDIP" class="collapse" aria-labelledby="headingDIP"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom DIP:</h6>
                <a class="collapse-item" href="utilities-color.html">Kategori</a>
                <a class="collapse-item" href="utilities-border.html">Daftar Informasi Publik</a>
            </div>
        </div>
    </li>


     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsegalleries"
            aria-expanded="true" aria-controls="collapsegalleries">
            <i class="fas fa-photo-video"></i>
            <span>Galeri</span>
        </a>
        <div id="collapsegalleries" class="collapse" aria-labelledby="headinggalleries"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Galeri:</h6>
                <a class="collapse-item" href="/daftarfoto">Galeri Foto</a>
                <a class="collapse-item" href="utilities-border.html">Galeri Video</a>
                <a class="collapse-item" href="utilities-border.html">Podcast</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utilities
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-users"></i>
            <span>Data User</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Costum User:</h6>
                <a class="collapse-item" href="login.html">Data User</a>
                <a class="collapse-item" href="register.html">Reset Password</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-power-off"></i>
            <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
</ul>
<!-- End of Sidebar -->