<?php
include "config.php";

function tambah($data)
{
    global $conn;
    $produk = htmlspecialchars($data["produk"]);
    $warna = htmlspecialchars($data["warna"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO list_produk
                VALUES
                ('', '$produk', '$warna', '$jumlah', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg diupload
    if ($error === 4) {
        echo "<script>
            alert('pilih foto terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yg diupload foto
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('yang anda upload bukan foto');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranfile > 1000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // move_uploaded_file buat mindahin file untuk insert nama file ke database
    // generate nama gambar baru

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensiGambar;

    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;
}

// mengecek apakah tombol sumbit sudah ditekan apa blm   
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}
