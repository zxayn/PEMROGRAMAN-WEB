<HTML>
<HEAD>
<TITLE>Penggunaan readfile </TITLE>
</HEAD>
<BODY>
<?php
echo "<p align=center><font face=verdana size=4+>";
echo "<b>Contoh Penggunaan readfile(); dengan file daftarnama.txt</b>";
?>
<hr size=1 color=#660099>
<font size=2>
<?php
$filesource="daftarnama.txt";
$openthis=readfile($filesource);
echo "$openthis";
?>
</BODY>
</HTML>