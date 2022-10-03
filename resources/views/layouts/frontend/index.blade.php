<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diskominfo Tolitoli</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('layouts.frontend.includes.style')
   
</head>

<body class="bg-white">

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('layouts.frontend.includes.navbar')     
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        @include('layouts.frontend.includes.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include('layouts.frontend.includes.script')
</body>

</html>