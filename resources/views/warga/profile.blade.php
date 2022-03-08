<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/img.css')}}">
</head>
<body>

<div class="main" id="top">
<div class="bg-holder bg-size" style="background-image:url(assets1/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <img class="rounded-circle mt-5" width="300px" height="220px" @if(Auth::user()->foto > 0) src="{{asset('foto/'.Auth::user()->foto)}}"@else style="background-image: url({{ asset('foto/default.png') }})" @endif>
              <span class="font-weight-bold">{{ auth()->user()->username }}</span>
              <span class="text-black-50">{{ auth()->user()->email }}</span>
              
            </div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="/warga/update/{{ $data->user_id }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">NIK </label>
                        <input type="text" class="form-control" placeholder="Lengkapi nik anda" name="nik" value="{{$data->nik}}">
                      </div>
                      <div class="col-md-12"><label class="labels">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Lengkapi nama anda" name="nama" value="{{$data->nama}}">
                      </div>
                      <div class="col-md-12"><label class="labels">No Telp</label>
                        <input type="number" class="form-control" placeholder="Lengkapi nomor telepon anda" name="telp" value="{{$data->telp}}">
                      </div>
                      <div class="col-md-12"><label class="labels">Email</label>
                        <input type="email" class="form-control" placeholder="Lengkapi email anda" name="email" value="{{$data->email}}">
                      </div>
                      <div class="col-md-12"><label class="labels">Username</label>
                        <input type="text" class="form-control" placeholder="Lengkapi username anda" name="username" value="{{$data->username}}">
                      </div>
                      <div class="col-md-12"><label class="labels">kota</label>
                         <select name="kota_id" class="form-control">
                           @foreach($kota as $kt)
                           <option value="{{ $kt->id }}">{{ $kt->nama_kota }}</option>
                           @endforeach
                         </select>
                      </div>
                      <div class="col-md-12"><label class="labels">foto</label>
                        <input type="file" class="form-control" placeholder="Lengkapi username anda" name="foto" value="{{$data->username}}">
                      </div>
                  </div>
                  <div class="mt-5 text-center">
                    <button class="btn btn-warning profile-button" type="submit">Save Profile</button>
                    <a href="/perjalanan" class="btn btn-primary profile-button">Kembali</a>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            {{-- <div class="p-3 py-5">
                <img src="{{ asset('assets1/img/illustrations/hero.png') }}" alt="">
            </div> --}}
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

