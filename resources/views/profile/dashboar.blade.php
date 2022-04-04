@extends('template.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <section class="py-0" id="home">
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center py-3">
            <div class="col-md-5 col-lg-4 order-md-1 text-center text-md-end">

              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="admin/img/illustrations/silde1.png" alt="" />
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="admin/img/illustrations/silde2.png"  alt="" />
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="admin/img/illustrations/silde3.png"  alt="" />
                  </div>
                </div>
              </div>


                
            </div>
            <div class="col-md-12 col-lg-8 text-center text-md-start">
              <h1 class="mb-4 display-3 fw-bold lh-sm">SELAMAT DATANG <br class="d-block d-lg-none d-xl-block" />{{ auth()->user()->username }}</h1>
              {{-- <p class="mt-3 mb-4 fs-1">Increase productivity with a simple to-do app. app for <br class="d-none d-lg-block" />managing your personal budgets.</p> --}}
            </div>
          </div>
        </div>
      </section>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
@stop