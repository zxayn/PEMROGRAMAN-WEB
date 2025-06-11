<HTML>
<HEAD>
<TITLE>Penggunaan Feof </TITLE>
</HEAD>
<BODY>
<?php
echo "<p align=center><font face=verdana size=4+>";
echo "<b>Contoh Penggunaan feof(); dengan file daftarnama.txt</b>";
?>
<hr size=1 color=#660099>
<font size=2>
<?php
$filesource="daftarnama.txt";
$openthis=fopen($filesource,"r");
while (!feof($openthis))
{
$cetak=fgets($openthis,100);
echo "$cetak<br>";
}
fclose($openthis);
?>
</BODY>
</HTML>