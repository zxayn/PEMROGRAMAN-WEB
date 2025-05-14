<?php
$nama =$_REQUEST['nama'];
$gender =$_REQUEST['gender'];

  if ($nama=='' || $gender==''){
    echo '<h2>Maaf Data Kurang Lengkap</h2>';
}else{
  if ($gender=='L') {
      echo '<h2>Selamat Datang Saudara,'.$nama. '</h2>';
}else{
      echo '<h2>Selamat Datang Saudari,'.$nama. '</h2>';
    }
  }
?>