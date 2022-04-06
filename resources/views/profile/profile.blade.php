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
                  <form action="/profile/update/{{$data->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-sm-3"> 
                        <h6 class="mb-0">NIK </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="number" name="nik" class="form-control" value="{{ $data->nik }}" >
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nama</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" name="name" class="form-control" value="{{ $data->name }}" >
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Telepon</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="number" name="telp" class="form-control" value="{{ $data->telp }}" >
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="email" name="email" class="form-control" value="{{ $data->email }}" >
                      </div>
                    </div>
                    <hr>
                    <div class="card" style="width: 100%; margin-left: 0; border: none;">
                      <ul class="list-unstyled">
                          <li class="d-flex">
                              <div class="flex-grow-1">
                                  <div class="form-group">
                                      <h6 class="mb-0">Alamat</h6>
                                      <select class="form-control mt-3" id="selectProvinsi">
                                          <option>Provinsi</option>
                                      </select>
                                      <select class="form-control mt-3" id="selectKota">
                                          <option>Kota</option>
                                      </select>
                                      <select class="form-control mt-3" id="selectKecamatan">
                                          <option>Kecamatan</option>
                                      </select>
                                      <select class="form-control mt-3" id="selectKelurahan">
                                          <option>Kelurahan</option>
                                      </select>
                                      <hr>
                                      <textarea name="alamat" value="" id="alamat" cols="92" rows="3"> {{ $data->alamat }} </textarea>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Username</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="username" value="{{ $data->username }}" >
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Foto</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="file" class="form-control" name="foto" >
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <a href="/profile/index/{{ auth()->user()->id }}" class="btn btn-info">Kembali</a>
                        <button type="submit" class="btn btn-success" >Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
       
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
  let selectProvinsi = document.getElementById('selectProvinsi');
  let selectKota = document.getElementById('selectKota');
  let selectKecamatan = document.getElementById('selectKecamatan');
  let selectKelurahan = document.getElementById('selectKelurahan');
  let alamat = document.getElementById('alamat');
  document.addEventListener("DOMContentLoaded", function () {
      fetchProvinsi();
      selectKota.style.display = "none";
      selectKecamatan.style.display = "none";
      selectKelurahan.style.display = "none";
      // fetchKota();
      // fetchKecamatan();
      // fetchKelurahan();
      getValueToAlamat();
  });
  const config = {
      method: "GET"
  };
  async function fetchProvinsi() {
      const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
      await fetch(URL, config)
          .then(response => response.json())
          .then(provinsi => {
              if (provinsi !== null || undefined) {
                  provinsi.map(data => {
                      let opt = document.createElement('option');
                      opt.value = data.id;
                      opt.innerHTML = data.name;
                      selectProvinsi.appendChild(opt);
                  })
              } else {
                  let opt = document.createElement('option');
                  opt.value = "";
                  opt.innerHTML = "Data tidak tersedia";
                  selectKelurahan.appendChild(opt);
              }
          }).catch(error => alert(`Data provinsi tidak ada`));
  }
  async function fetchKota(id) {
      const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
      await fetch(URL, config)
          .then(response => response.json())
          .then(kota => {
              if (kota !== null || undefined) {
                  kota.map(data => {
                      let opt = document.createElement('option');
                      opt.value = data.id;
                      opt.innerHTML = data.name;
                      selectKota.appendChild(opt);
                  })
              } else {
                  let opt = document.createElement('option');
                  opt.value = "";
                  opt.innerHTML = "Data tidak tersedia";
                  selectKelurahan.appendChild(opt);
              }
          });
  }
  async function fetchKecamatan(id) {
      const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? "" : id}.json`;
      await fetch(URL, config)
          .then(response => response.json())
          .then(kecamatan => {
              if (kecamatan !== null || undefined) {
                  kecamatan.map(data => {
                      let opt = document.createElement('option');
                      opt.value = data.id;
                      opt.innerHTML = data.name;
                      selectKecamatan.appendChild(opt);
                  })
              } else {
                  let opt = document.createElement('option');
                  opt.value = "";
                  opt.innerHTML = "Data tidak tersedia";
                  selectKelurahan.appendChild(opt);
              }
          });
  }
  async function fetchKelurahan(id) {
      const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
      await fetch(URL, config)
          .then(response => response.json())
          .then(kelurahan => {
              if (kelurahan !== null || undefined) {
                  kelurahan.map(data => {
                      let opt = document.createElement('option');
                      opt.value = data.id;
                      opt.innerHTML = data.name;
                      selectKelurahan.appendChild(opt);
                  })
              } else {
                  let opt = document.createElement('option');
                  opt.value = "";
                  opt.innerHTML = "Data tidak tersedia";
                  selectKelurahan.appendChild(opt);
              }
          });
  }
  // selectProvinsi.addEventListener('change', () => {
  //     console.log(selectProvinsi.options[selectProvinsi.selectedIndex].text);
  // })
  selectProvinsi.addEventListener('change', () => {
      fetchKota(selectProvinsi.value);
      selectKota.style.display = "block";
      selectKota.innerHTML = '';
      selectKecamatan.innerHTML = '';
      selectKelurahan.innerHTML = '';
  });
  selectKota.addEventListener('change', () => {
      fetchKecamatan(selectKota.value);
      selectKecamatan.style.display = "block";
      selectKecamatan.innerHTML = '';
      selectKelurahan.innerHTML = '';
  });
  selectKecamatan.addEventListener('change', () => {
      fetchKelurahan(selectKecamatan.value);
      selectKelurahan.style.display = "block";
      selectKelurahan.innerHTML = '';
  });
  function getValueToAlamat() {
      alamat.addEventListener('change', () => {
          let alamatText = alamat.value;
          document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
          // console.log(`${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
      });
  }
</script>
</body>
</html>

@stop

