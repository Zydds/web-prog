<?php
require "function.php";

if(isset($_POST["submit"]) ) {


    if(tambah($_POST) > 0) {
        echo "<script> 

            alert('data berhasil ditambah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "gagal di tambah!";
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
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="deskripsi">Deskripsi: </label>
                <input type="text" name="deskripsi" id="deskripsi" required>
            </li>
            <li>
                <label for="ruangan">Ruangan: </label>
                <input type="text" name="ruangan" id="ruangan" required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah!</button>
            </li>
        </ul>

    </form>
</body>
</html>