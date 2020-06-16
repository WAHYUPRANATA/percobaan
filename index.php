<?php
require 'function.php';
$hewan = query(" SELECT * FROM data_hewan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>data hewan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>jenis</th>
            <th>nama</th>
            <th>makanan</th>
        </tr>
    <?php $i=1; ?>    
      <?php foreach($hewan as $hwn):?>  
        <tr>
            <td><?= $i?></td>
            <td>
                <a href=""> ubah </a> <br>
                <a href=""> hapus </a>
            </td>
            <td>
                <img src="img/<?= $hwn["gambar"]?>" width="50">
            </td>
            <td><?= $hwn["jenis"]?></td>
            <td><?= $hwn["nama"]?></td>
            <td><?= $hwn["makanan"]?></td>
        </tr>
    <?php $i++; ?>    
      <?php endforeach;?>
    </table>
</body>
</html>