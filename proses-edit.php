<?php
include "config.php";

function edit($data)
{
    global $conn;

    $id = $data["id"];
    $produk = htmlspecialchars($data["produk"]);
    $warna = htmlspecialchars($data["warna"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    // cek apakah user pilih foto baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE list_produk SET
                produk = '$produk',
                warna = '$warna',
                jumlah = '$jumlah',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// mengecek apakah tombol sumbit sudah ditekan apa blm   
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diedit');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diedit');
                document.location.href = 'index.php';
            </script>";
    }
}
