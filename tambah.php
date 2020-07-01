<?php
require 'function.php';
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

    if (tambah($_POST) > 0) {
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
    <title>Halaman Tambah</title>
</head>
<body>
    <h1>Tambah Data Hewan</h1>
    <table>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label> <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jenis">Jenis :</label> <input type="text" name="jenis" id="jenis" required>
            </li>
            <li>
                <label for="makanan">Makanan :</label> <input type="text" name="makanan" id="makanan" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label> <input type="text" name="gambar" id="gambar" required>
            </li>
            <br>
            <br>
            <li>
               <button type="submit" name="submit" > ADD</button>
            </li>
        </ul>
    
    </form>
    </table>
    <!-- kembali <a href="index.php ">MAJU,MUNDUR WES KADUNG AJUR</a> -->
</body>
</html>