
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PEDULI DIRI  </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('admin/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('admin/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{asset('admin/css/theme.css')}}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
            <div class="text-warning">Peduli</div>
            <div class="text-1000">Diri</div>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item">
                <a class="nav-link fw-medium active" aria-current="page" href="/register">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="py-0" id="home">
        <div class="bg-holder" style="background-image:url(admin/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center py-8">
            <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="{{asset('admin/img/illustrations/bg-home2.svg')}}" width="800" alt="" /></div>
            <div class="col-md-7 col-lg-6 text-center text-md-start">

              <h1 class="mb-4 display-3 fw-bold lh-sm">SELAMAT DATANG <br class="d-block d-lg-none d-xl-block" />PEDULI DIRI</h1>
              <p class="mt-3 mb-4 fs-1">Increase productivity with a simple to-do app. app for <br class="d-none d-lg-block" />managing your personal budgets.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="py-7">
        <div class="container">
          <div class="row">
            <div class="col-12 mx-auto align-items-center text-center">
              <p class="mb-0 fs--1 text-700">© This template is made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="text-700" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
          </div>
          {{-- <div class="row align-items-center justify-content-center justify-content-lg-around">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="{{asset('admin/img/gallery/company-1.png')}}" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="{{asset('admin/img/gallery/company-2.png')}}" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="{{asset('admin/img/gallery/company-3.png')}}" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="{{asset('admin/img/gallery/company-4.png')}}" alt="" /></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="{{asset('admin/img/gallery/company-1.png')}}" alt="" /></div>
          </div> --}}
        </div><!-- end of .container-->
      </section>  
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('admin/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('admin/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
  </body>
</html>