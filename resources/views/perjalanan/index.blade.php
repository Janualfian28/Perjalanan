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

    <div class="col-md-5 col-lg-5 order-md-1 text-center text-md-end">
        <img class="img-fluid" src="{{asset('admin/img/illustrations/bg-content.svg')}}" width="350" alt="" />
    </div>
    <div class="col-md-7 col-lg-7 text-center text-md-start">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Perjalanan </h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           +
                        </button>
                    </div>
                </div>
    
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach($data as $no => $item)
                        <tbody>
                            <tr>
                                <td> {{ $data->firstItem() + $no }} </td>
                                <td> {{ $item->tanggal }} </td>
                                <td> {{ $item->jam }} </td>
                                <td> {{ $item->lokasi }} </td>
                                <td> {{ $item->suhu_tubuh }}° </td>
                                <td>
                                    <a href="/perjalanan/delete/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            Tampilan
                            {{ $data->firstItem() }}
                            sampai
                            {{ $data->lastItem() }}
                            data, 
                            dari total
                            {{ $data->total() }} data
                        </div>
                        <div class="col-md-6 d-flex justify-content-end mt-3">
                            {{ $data->links() }}
                        </div>
                    </div>
                       
            </div>
        </div>
    

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Tambah data perjalanan</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form action="/perjalanan/store" method="post">
                @csrf
                <table>
                    <form>
                        <?php date_default_timezone_set('Asia/Jakarta') ?>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal</label>
                          <input type="date" name="tanggal" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jam</label>
                          <input type="text" name="jam" value="{{ date('H.i') }}" required="" class="form-control" id="exampleInputPassword1" placeholder="Jam">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Lokasi</label>
                            <input type="text"  required="" name="lokasi" class="form-control" id="exampleInputPassword1" placeholder="Lokasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Suhu Tubuh</label>
                            <input type="find" name="suhu_tubuh" required="" class="form-control" id="exampleInputPassword1" placeholder="Suhu Tubuh">
                          </div>
                      </form>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
    </div>
    </div>
    </div>
    </div>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
@stop