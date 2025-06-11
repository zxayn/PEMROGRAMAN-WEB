<HTML>
<HEAD>
<TITLE>Penggunaan Fputs </TITLE>
</HEAD>
<BODY>
<?php
//Menuliskan Data
$filename="data_fputs.txt";
$openthis=fopen($filename,"w");
$data="INI JIBAN";
fputs($openthis,$data);
fclose($openthis);
?>
<?
//Membaca Data
$filename="data_fputs.txt";
$openthis=fopen($filename,"r");
$isi=fread($openthis,500);
echo "Data Berhasil di masukkan ke dalam file $filename<br>";
echo "Date tersebut adalah : ";
echo "$isi";
fclose($openthis);
?>
</BODY>
</HTML>