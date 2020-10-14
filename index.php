<?php
include "config.php";

//pagination
$jumlahdataperhalaman = 5;
$jumlahdata = count(query("SELECT * FROM list_produk"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
$halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;

$produk = query("SELECT * FROM list_produk LIMIT $awaldata, $jumlahdataperhalaman");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: 'Overpass', sans-serif;
        }

        * {
            box-sizing: border-box;

        }

        .flex-container-column {
            max-width: 1000px;
            margin: 0 auto;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            padding-top: 15px;
            color: #673AB7;
            font-weight: bold;
        }

        thead th {
            text-align: center;
            background-color: #D1C4E9;
        }

        tbody th,
        td {
            text-align: center;
            line-height: 70px;
        }
    </style>
</head>

<body>
    <div class="flex-container-column card">
        <div class="col-lg-12">
            <h2>DATA PRODUK</h2>
            <a class="btn" style="background-color: #9575CD;color:white;" href="tambah.php" role="button"><i class="far fa-plus-square"></i> Tambah Produk</a><br><br>

            <!-- navigasi -->
            <?php if ($halamanaktif > 1) : ?>
                <a href="?halaman=<?= $halamanaktif - 1; ?>">&laquo;</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
                <?php if ($i == $halamanaktif) : ?>
                    <a href="?halaman=<?= $i; ?>" style="font-weige:bold; color:#F48FB1;"><?= $i; ?></a>
                <?php else : ?>
                    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($halamanaktif < $jumlahhalaman) : ?>
                <a href="?halaman=<?= $halamanaktif + 1; ?>">&raquo;</a>
            <?php endif; ?>

            <table class="table table-striped-primary">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row["produk"]; ?></td>
                            <td><?= $row["warna"]; ?></td>
                            <td><?= $row["jumlah"]; ?></td>
                            <td><img src="img/<?= $row["gambar"]; ?>" width="70px"></td>
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?= $row["id"]; ?>" role="button" style="color: white;">Edit</a>
                                <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" role="button">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>