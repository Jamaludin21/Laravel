<!DOCTYPE html>
<html>
<head>
	<title>CRUD Laravel</title>
</head>
<body>
 
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa/create"> + Tambah Mahasiswa Baru</a>

	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Divisi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->mahasiswa_nama }}</td>
			<td>{{ $p->mahasiswa_alamat }}</td>
			<td>{{ $p->mahasiswa_divisi }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/destroy/{{ $p->mahasiswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>