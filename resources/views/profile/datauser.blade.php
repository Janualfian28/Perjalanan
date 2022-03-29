@extends('template.master')
@section('content')
<html>
<head>
	<title>Data User Peduli Diri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Data User Peduli Diri</h4>
			</div>
			<div class="col-md-6">
				<a href="/cetak" class="btn btn-sm btn-success float-right" target="_blank">CETAK PDF</a>
			</div>
		</div>
		<table class='table table-bordered mt-3'>
			<thead>
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Telepon</th>
					<th>Email</th>
                    <th>Username</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $p)
				<tr>
					<td>{{ $p->nik }}</td>
					<td>{{$p->name}}</td>
					<td>{{$p->telp}}</td>
					<td>{{$p->email}}</td>
					<td>{{$p->username}}</td>
					<td>{{$p->alamat}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
 
	</div>
</body>
</html>
@stop