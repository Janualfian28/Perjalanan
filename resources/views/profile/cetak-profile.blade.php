<html>
<head>
	<title>Data User Peduli Diri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>Data User Peduli Diri</h4>
	</center>
 
	<table class='table table-bordered'>
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
				<td>{{ $p->nik ?? "Data Kosong"  }}</td>
				<td>{{$p->name ?? "Data Kosong" }}</td>
				<td>{{$p->telp ?? "Data Kosong" }}</td>
				<td>{{$p->email ?? "Data Kosong" }}</td>
				<td>{{$p->username ?? "Data Kosong" }}</td>
				<td>{{$p->alamat ?? "Data Kosong" }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
