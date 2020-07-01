<?php
$koneksi = mysqli_connect("localhost", "root", "", "hewan");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
} 

function tambah($data){
    global $koneksi;
    $nama=htmlspecialchars($data["nama"]);
    $jenis=htmlspecialchars($data["jenis"]);
    $makanan=htmlspecialchars($data["makanan"]);
    $gambar=htmlspecialchars($data["gambar"]);

    $query =" INSERT  INTO data_hewan
                VALUES
                ('','$nama','$jenis','$makanan','$gambar')
         "; 

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function delete($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM data_hewan WHERE id =$id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;
    $id=$data["id"];
    $nama=htmlspecialchars($data["nama"]);
    $jenis=htmlspecialchars($data["jenis"]);
    $makanan=htmlspecialchars($data["makanan"]);
    $gambar=htmlspecialchars($data["gambar"]);

    $query =" UPDATE data_hewan
                set
               nama='$nama',
               jenis='$jenis',
               makanan='$makanan',
               gambar='$gambar'

            WHERE id=$id
         "; 

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}
?>