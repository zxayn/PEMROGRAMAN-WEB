<HTML>
<HEAD>
<TITLE>Penggunaan FGETS </TITLE>
</HEAD>
<BODY>
<?php
echo "<p align=center><font face=verdana size=4+>";
echo "<b>Contoh Penggunaan fgets(); dengan file
daftarnama.txt</b>";
?>
<hr size=1 color=#660099>
<font size=2>
<?php
$filesource="daftarnama.txt";
$openthis=fopen($filesource,"r");
while ($cetak=fgets($openthis,100))
{
echo "$cetak<br>";
}
fclose($openthis);
?>
</BODY>
</HTML>