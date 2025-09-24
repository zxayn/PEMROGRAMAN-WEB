<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Generator Table</title>
  
</head>

<body>
  <h2>Modul Praktikum 1</h2>
  <form method="post" action="">
    Kolom: <input type="number" name="kolom"><br>
    Baris: <input type="number" name="baris"><br>
    <button type="submit" name="tampil">Tampil</button>
    <button type="submit" name="reset">Reset</button>
  </form>

  <?php
  if (isset($_POST['tampil'])) {
    $kolom = ($_POST['kolom']);
    $baris = ($_POST['baris']);
    if($kolom=="" && $baris==""){
        echo"tidak ada data";
    }else{
          $total = $kolom * $baris;
    $nomor = $total;

    echo "<p>Jumlah Kolom = $kolom, Jumlah Baris = $baris</p>";
    echo "<table border='1'>";
    for ($i = 0; $i < $baris; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $kolom; $j++) {
        echo "<td>" . $nomor-- . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    }
    
    if (isset($_POST['reset'])) {

  }

  }

  ?>
</body>
</html>