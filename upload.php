<!DOCTYPE html>
<html>
<head>
    <title>Simple Upload dan Download Files</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Beberapa styling dasar untuk pesan error/sukses */
        .SUCCESS {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .ERROR {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Upload dan Download File</h1>
        </div>

        <div id="menu">
            <a href="index.php">Home</a>
            <a href="upload.php" class="active">Upload</a>
            <a href="download.php">Download</a>
        </div>

        <div id="content">
            <h2>Upload File</h2>
            <p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi
            <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip/.txt</b> dan besar file (file size maksimal hanya 1 MB).</p>

            <?php
            // Pastikan file config.php sudah diperbaiki seperti yang saya sarankan sebelumnya
            include "config.php"; // Ini akan menyediakan variabel $conn dan fungsi formatBytes()

            if (isset($_POST['upload'])) {
                $allowed_ext = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'txt');
                $file_name   = $_FILES['file']['name'];
                $file_ext    = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Cara yang lebih modern untuk mendapatkan ekstensi
                $file_size   = $_FILES['file']['size'];
                $file_tmp    = $_FILES['file']['tmp_name'];
                $nama        = mysqli_real_escape_string($conn, $_POST['nama']); // Mencegah SQL Injection
                $tgl         = date("Y-m-d");

                // Buat nama file unik untuk mencegah overwriting
                $new_file_name = uniqid() . '.' . $file_ext;
                $lokasi        = 'aku' . $new_file_name; // Simpan di folder 'files/'

                if (in_array($file_ext, $allowed_ext) === true) {
                    if ($file_size < 1048576) { // 1 MB = 1024 * 1024 bytes
                        if (move_uploaded_file($file_tmp, $lokasi)) {
                            // Menggunakan prepared statement untuk keamanan ekstra
                            $stmt = mysqli_prepare($conn, "INSERT INTO download (tanggal_upload, nama_file, tipe_file, ukuran_file, file) VALUES (?, ?, ?, ?, ?)");
                            mysqli_stmt_bind_param($stmt, "sssss", $tgl, $nama, $file_ext, $file_size, $lokasi);

                            if (mysqli_stmt_execute($stmt)) {
                                echo '<div class="SUCCESS">File berhasil di Upload</div>';
                            } else {
                                echo '<div class="ERROR">Gagal upload file ke database: ' . mysqli_error($conn) . '</div>';
                            }
                            mysqli_stmt_close($stmt);
                        } else {
                            echo '<div class="ERROR">Gagal memindahkan file ke server.</div>';
                        }
                    } else {
                        echo '<div class="ERROR">Besar ukuran file (file size maksimal 1 MB)</div>';
                    }
                } else {
                    echo '<div class="ERROR">Ekstensi file tidak di izinkan!</div>';
                }
            }
            ?>

            <form action="" method="post" enctype="multipart/form-data">
                <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="40%" align="right"><b>Nama File:</b></td>
                        <td><input type="text" name="nama" size="40" required /></td>
                    </tr>
                    <tr>
                        <td width="40%" align="right"><b>Pilih File:</b></td>
                        <td><input type="file" name="file" required /></td>
                    </tr>
                    <tr>
                        <td width="40%" align="right"></td>
                        <td><input type="submit" name="upload" value="Upload" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>