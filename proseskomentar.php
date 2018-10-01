<?php

$komen = $_POST["komen"];

if(strlen($komen) < 5){
	echo "Komentar yang dimasukkan harus lebih dari 5 huruf!";
} else{
	echo $komen. "<br> <br>";
	echo "Panjang Komentar yang Anda Masukkan: " .strlen($komen);
}

?>
<br> <br>
<a href="komentar.php" style="text-decoration: none"> Kembali ke Form Komentar </a>