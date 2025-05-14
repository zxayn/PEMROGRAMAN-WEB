<?php
//membuat variabel
$nama = $_REQUEST['nama'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$umur = $_REQUEST['umur'];
$komentar = $_REQUEST['komentar'];

//menampilkan data yang diterima
echo "TERIMA KASIH ATAS KOMENTAR ANDA<br>";
echo "Nama: $nama<br>";
echo "Email: $email<br>";
echo "Jenis Kelamin: $gender<br>";
echo "Umur: $umur<br>";
echo "Komentar:<br>";
echo $komentar;
?>