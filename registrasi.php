<!DOCTYPE html>
<html>
<head>
	<title>FORM PENDAFTARAN</title>
</head>
<body>
	<h1 align="center"> FORM PENDAFTARAN MAHASISWA </h1>
	<h2 align="center"> Silahkan isi data-data dibawah ini dengan benar!</h2>
	<table align="center">
		<form method="POST" action="prosesregis.php">
			<tr>
				<td> Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
				<td> : </td>
				<td> <input type="text" name="nama"></td>
			</tr>


			<tr>
				<td> NIM </td>
				<td> : </td>
				<td> <input type="text" name="nim"></td>
			</tr>

			<tr>
				<td> Email </td>
				<td> : </td>
				<td> <input type="text" name="email"></td>
			</tr>

			<tr>
				<td> </td>
				<td> </td>
				<td> <input type="submit" name="proses" value="Proses"></td>
			</tr>
		</form>
	</table>

</body>
</html>

