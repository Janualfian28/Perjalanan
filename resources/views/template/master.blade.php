
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
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicons/smk.jpg')}}">
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
      @include('template.includes.navbar')
      <section class="py-0" id="home">
        <div class="bg-holder" style="background-image:url(admin/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center py-10">
                @yield('content')
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
          <div class="row align-items-center justify-content-center justify-content-lg-around">
            {{-- <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="{{asset('admin/img/gallery/company-1.png')}}" alt="" /></div>
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