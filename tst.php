<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Secret reCAPTCHA
  $recaptchaSecret = "6LdNZkcrAAAAAAeR4TrCrEXJqK6ALRn-V0qemzcW";
  $response = $_POST['g-recaptcha-response'] ?? '';
  $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}");
  $captchaSuccess = json_decode($verify);

  if (!$captchaSuccess->success) {
    $errors[] = "Verifikasi CAPTCHA gagal. Silakan coba lagi.";
  }

  // Validasi form
  if (empty($_POST["nama"])) $errors[] = "Nama belum diisi.";
  if (empty($_POST["tanggalLahir"])) $errors[] = "Tanggal lahir belum diisi.";
  if (empty($_POST["jenisKelamin"])) $errors[] = "Jenis kelamin belum dipilih.";
  if (empty($_POST["alamat"])) $errors[] = "Alamat belum diisi.";
  if (empty($_POST["telepon"])) $errors[] = "Nomor telepon belum diisi.";
  if (empty($_POST["kategori"])) $errors[] = "Kategori petani belum dipilih.";
  if (empty($_POST["email"])) $errors[] = "Email belum diisi.";
  if (empty($_POST["password"])) $errors[] = "Password belum diisi.";

  // Jika lolos semua validasi
  if (empty($errors)) {
    $success = true;

    // Di sini seharusnya Anda menyimpan ke database
    // Contoh: simpanData($_POST['nama'], ...);
  }
}
?>
