<?php
$bulan=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

echo '<select name="hari">';
$hari=1;
while($hari<=31) {
    echo "<option value=\"$hari\">$hari</option>";
    $hari++;
}
echo '</select>';

echo '<select name="bulan">';
$jumlah=count($bulan);
for($i=0; $i<$jumlah; $i++) {
    echo '<option value="'.$bulan[$i].'">'.$bulan[$i].'</option>';
}
echo '</select>';

echo '<select name="tahun">';
for($tahun=2000; $tahun<2010; $tahun++){
    echo "<option value=\"$tahun\">$tahun</option>";
}
echo '</select>';
?>