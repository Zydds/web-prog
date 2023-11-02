<?php
require 'function.php';

$id = $_GET["Id_barang"];
$up = query("SELECT * FROM barang WHERE Id_barang = $id")[0];

if(isset($_POST["submit"]) ) {


    if( update($_POST) > 0) {
        echo "<script> 

            alert('data berhasil di update');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script> 

            alert('data gagal di update');
            document.location.href = 'index.php';
            </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Tambah Barang Museum</h1>
    <form action="" method="post">
        <input type="hidden" name="Id_barang" value="<?= $up["Id_barang"]?>" >
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?= $up["nama"]?>" required>
            </li>
            <li>
                <label for="deskripsi">Deskripsi: </label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?= $up["deskripsi"]?>" required>
            </li>
            <li>
                <label for="ruangan">Ruangan: </label>
                <input type="text" name="ruangan" id="ruangan" value="<?= $up["ruangan"]?>" required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" value="<?= $up["gambar"]?>" required>
            </li>
            <li>
                <button type="submit" name="submit">Update!</button>
            </li>
        </ul>

    </form>
</body>
</html>