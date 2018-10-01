<?php


if(isset($_POST["proses"])){
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$email = $_POST["email"];
}

$error = array();
if (strlen($nama) > 25){
	$error['nama'] = 'Jumlah Maksimal Karakter adalah 10!';
} if (strlen($nim) > 10){
	$error['nim'] = 'Jumlah Maksimal Karakter adalah 25!';
}if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z.]{2,5}$/",$email))
	$error['email'] = 'Email yang anda masukkan salah!'
?>

<table>
	<tr>
		<td> Nama </td>
		<td> : </td>
		<td> <p style="color: red";><?php echo ($error['nama']) ? $error['nama'] : '';?> </td>
	</tr>

	<tr>
		<td> NIM </td>
		<td> : </td>
		<td> <p style="color: red";><?php echo ($error['nim']) ? $error['nim'] : '';?></td>
	</tr>

	<tr>
		<td> Email </td>
		<td> : </td>
		<td> <p style="color: red";><?php echo ($error['email']) ? $error['email'] : '';?></td>
	</tr>

</table>

<br> <br>
<a href="registrasi.php" style="text-decoration: none" > Kembali ke Form </a>
