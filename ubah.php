<?php
require 'function.php';

$id=$_GET["id"];
// var_dump ($id);

$hwn =query(" SELECT * FROM data_hewan WHERE id=$id ")[0];
// var_dump ($hwn);


    if(isset($_POST["submit"])){
    //     $nama=$_POST["nama"];
    //     $jenis=$_POST["jenis"];
    //     $makanan=$_POST["makanan"];
    //     $gambar=$_POST["gambar"];

    //     $query =" INSERT  INTO data_hewan
    //             VALUES
    //             ('','$nama','$jenis','$makanan','$gambar')
    //      "; 

    // mysqli_query($koneksi,$query);

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('berhasil');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
             alert('gagal');
            document.location.href='index.php';
         </script>";
        // echo mysqli_error($koneksi);
    }
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman UBAH</title>
</head>
<body>
    <h1>UBAH Data Hewan</h1>
    <table>
    <form action="" method="POST">
    <input type="hidden" name="id" id="id"  value="<?= $hwn["id"]; ?>">
        <ul>
       
            <li>
                <label for="nama">Nama :</label> 
                <input type="text" name="nama" id="nama"  value="<?= $hwn["nama"]; ?>">
            </li>
            <li>
                <label for="jenis">Jenis :</label> 
                <input type="text" name="jenis" id="jenis"  value="<?= $hwn["jenis"]; ?>">
            </li>
            <li>
                <label for="makanan">Makanan :</label>
                 <input type="text" name="makanan" id="makanan"  value="<?= $hwn["makanan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                 <input type="text" name="gambar" id="gambar"  value="<?= $hwn["gambar"]; ?>">
            </li>
            <br>
            <br>
            <li>
               <button type="submit" name="submit" > UBAH</button>
            </li>
        </ul>
    
    </form>
    </table>
    <!-- kembali <a href="index.php ">MAJU,MUNDUR WES KADUNG AJUR</a> -->
</body>
</html>