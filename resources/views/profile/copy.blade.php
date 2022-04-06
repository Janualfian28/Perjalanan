@extends('template.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/img.css')}}">
</head>
<body>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img class="rounded-circle" width="150" @if(Auth::user()->foto > 0) src="{{asset('foto/'.Auth::user()->foto)}}"@else style="background-image: url({{ asset('foto/default.png') }})" @endif>
                    <div class="mt-3">
                      <h4>{{ auth()->user()->name }}</h4>
                      <p class="text-secondary mb-1">{{ auth()->user()->email }}</p>
                      <p class="text-muted font-size-sm">{{ auth()->user()->alamat }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body"> 
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">NIK </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <p>{{ auth()->user()->nik }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">Nama </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <p>{{ auth()->user()->name }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">Telepon </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <p>{{ auth()->user()->telp }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">Email </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <p>{{ auth()->user()->email }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">Username </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <p>{{ auth()->user()->username }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">Alamat </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <p>{{ auth()->user()->alamat }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <a href="/perjalanan" class="btn btn-info">Kembali</a>
                        <a href="/profile/{{ auth()->user()->id }}" class="btn btn-warning">Edit </a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
       
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

@stop

