<HTML>
<HEAD>
<TITLE>Mengecek File </TITLE>
</HEAD>
<BODY>
<?php
$file1="daftarnama.txt";
$file2="nomortelp.txt";
if (file_exists($file1)) {
echo "$file1 sudah ada<p>";
}
else { echo "$file1 Belum Ada<p>"; }
if (file_exists($file2)) {
echo "$file1 sudah ada<p>";
}
else { echo "$file2 Belum Ada<p>"; }
?>
</BODY>
</HTML>