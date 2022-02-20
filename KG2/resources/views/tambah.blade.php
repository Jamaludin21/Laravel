<!DOCTYPE html>
<html>
<head>
	<title>CRUD Laravel</title>
</head>
<body>

	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/mahasiswa/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		Divisi <input type="text" name="divisi"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
		
 
 
</body>
</html>