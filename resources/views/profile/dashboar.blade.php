@extends('template.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perjalanan</title>
</head>
<body>
    <section class="py-0" id="home">
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center py-3">
            <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end">
                <img class="img-fluid" src="{{asset('admin/img/illustrations/bgd.svg')}}" width="800" alt="" />
            </div>
            <div class="col-md-7 col-lg-6 text-center text-md-start">
              <h1 class="mb-4 display-3 fw-bold lh-sm">SELAMAT DATANG <br class="d-block d-lg-none d-xl-block" />PEDULI DIRI</h1>
              <p class="mt-3 mb-4 fs-1">Increase productivity with a simple to-do app. app for <br class="d-none d-lg-block" />managing your personal budgets.</p>
            </div>
          </div>
        </div>
      </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
@stop