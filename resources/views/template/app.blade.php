
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title','Perjalanan')</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="manifest" href="{{asset('assets1/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets1/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{asset('assets1/css/theme.css')}}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      @include('template.partial.navbar')
      <section class="py-xxl-10 pb-6" id="home">
        
        <div class="bg-holder bg-size" style="background-image:url(assets1/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
        </div>

        
        <!--/.bg-holder-->

        <div class="container">
              @yield('content')
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('assets1/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>