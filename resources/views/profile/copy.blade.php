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
                <form action="/profile/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">NIK </label>
                        <input type="text" class="form-control" placeholder="Lengkapi nik anda" name="nik" value="{{$data->nik}}">
                      </div>
                      <div class="col-md-12"><label class="labels">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Lengkapi nama anda" name="name" value="{{$data->name}}">
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
                           <option value="{{ $kt->id }}" @if($kt->id == $data->kota_id) selected   @endif>{{ $kt->nama_kota }}</option>
                           @endforeach
                         </select>
                      </div>
                      <div class="col-md-12"><label class="labels">foto</label>
                        <input type="file" class="form-control" name="foto">
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