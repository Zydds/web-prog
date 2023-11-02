<?php
require 'function.php';
$barang = query("SELECT * FROM barang");
$result = mysqli_query($conn,"SELECT * FROM barang");
//if( !$result) {
//echo mysqli_error($conn);
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
</head>
<body>
    <h1>Daftar Barang Museum</h1>
    <a href="tambah.php">Tambah Barang Museum</a>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No. </th>
            <th>Ubah</th>
            <th>Gambar</th>
            <th>Nama </th>
            <th>Deskripsi</th>
            <th>Ruangan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $barang as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="update.php?Id_barang=<?= $row["Id_barang"];?>">update</a> |
                <a href="hapus.php?Id_barang=<?= $row["Id_barang"];?>">hapus</a>
            </td>
            <td><img src="<?= $row["gambar"];?>" width="100"></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["deskripsi"];?></td>
            <td><?= $row["ruangan"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
