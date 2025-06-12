<?php

// Konfigurasi koneksi database
$db_host = "localhost";
$db_user = "root";
$db_pass = ""; // Jika Anda memiliki password untuk user 'root', ganti string kosong ini
$db_name = "download";

// Membuat koneksi ke database menggunakan MySQLi
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Fungsi untuk mengkonversi ukuran file
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow];
}

?>