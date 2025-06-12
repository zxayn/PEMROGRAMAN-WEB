<!DOCTYPE html>
<html>
<head>
    <title>Simple Upload dan Download Files</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Upload dan Download File</h1>
        </div>

        <div id="menu">
            <a href="index.php">Home</a>
            <a href="upload.php">Upload</a>
            <a href="download.php" class="active">Download</a>
        </div>

        <div id="content">
            <h2>Downloads</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik judul file yang di inginkan.</p>

            <table class="table" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <th width="30">No.</th>
                    <th width="150">Tgl. Upload</th>
                    <th>Nama File</th>
                    <th width="50">Type</th>
                    <th width="70">Ukuran</th>
                </tr>
                <?php
                // Pastikan file config.php sudah diperbaiki dan menyediakan $conn
                include "config.php";

                // Menggunakan mysqli_query() dan $conn
                $sql = mysqli_query($conn, "SELECT * FROM download ORDER BY id DESC");

                // Menggunakan mysqli_num_rows()
                if (mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    // Menggunakan mysqli_fetch_assoc()
                    while ($data = mysqli_fetch_assoc($sql)) {
                        echo '
                        <tr>
                            <td align="center">' . $no . '</td>
                            <td align="center">' . htmlspecialchars($data['tanggal_upload']) . '</td>
                            <td><a href="' . htmlspecialchars($data['file']) . '">' . htmlspecialchars($data['nama_file']) . '</a></td>
                            <td align="center">' . htmlspecialchars($data['tipe_file']) . '</td>
                            <td align="center">' . formatBytes($data['ukuran_file']) . '</td>
                        </tr>
                        ';
                        $no++;
                    }
                } else {
                    echo '
                    <tr>
                        <td bgcolor="#fff" align="center" colspan="5">Tidak ada data</td>
                    </tr>
                    ';
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>