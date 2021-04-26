<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h2>LIST MAHASISWA</h2>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>
		<?php
			include "koneksi.php";
			$sql="SELECT * FROM mahasiswa1";
			$mahasiswa=mysqli_query($koneksi,$sql);
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['JKEL']=='P'?'PEREMPUAN':'Laki_Laki';
				echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['NAMA']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['EMAIL']."</td>
				<td>".$row['ALAMAT']."</td>
				<td>".$row['KOTA']."</td>
				<td>".$row['PESAN']."</td>
				</tr>";
			}
		?>
	</table>
</body>
</html>