<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>PENDAFTARAN SISWA BARU</title>
    </head>
    <body>
        <!--bagian box formulir-->
        <section class="box-formulir">
            <h2>Pendaftaran Berhasil</h2>
            <div class="box">
                <h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
            </div>
        </section>
    </body>
</html>