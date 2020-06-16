<?php
//buat koneksi
$koneksi = mysqli_connect("localhost" , "root" , "" , "hewan");
//ambil data dari tabel 
$result = mysqli_query( $koneksi , " SELECT * FROM data_hewan ");
//ambil data isi (fetch)
//mysqli_fetch_row();mengembilkan array numerik
// $hwn = mysqli_fetch_row($result);
// var_dump ($hwn[3])
//mysqli_fetch_assoc();mengembalikan array asosiatif
// $hwn = mysqli_fetch_assoc($result);
// var_dump ($hwn["jenis"])
//mysqli_fetch_array(); mengembalikan arrai numerik dan assosiatif
//$hwn = mysqli_fetch_array($result);
// var_dump ($hwn[3]);
// var_dump ($hwn["makanan"]);
//mysqli_fetch_object();
// $hwn = mysqli_fetch_object($result);
// var_dump ($hwn -> jenis);

// while ($hwn = mysqli_fetch_assoc($result)){
// var_dump ($hwn);
// } 
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
      <?php while($hwn = mysqli_fetch_assoc($result)):?>  
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
        <?php endwhile?>
    </table>
</body>
</html>