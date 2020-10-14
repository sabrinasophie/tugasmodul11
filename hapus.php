<?php
include "config.php";

$id = $_GET["id"];

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM list_produk WHERE id = $id");

    return mysqli_affected_rows($conn);
}

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
        </script>
        ";
}
