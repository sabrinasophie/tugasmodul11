<?php
include "config.php";

// ambil data di url
$id = $_GET["id"];

// query data produk berdasarkan id
$pdk = query("SELECT * FROM list_produk WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        body {
            font-family: 'Overpass', sans-serif;
        }

        * {
            box-sizing: border-box;

        }

        .flex-container-column {
            max-width: 500px;
            height: 570px;
            margin: 0 auto;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 25px;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 3px solid #ccc;
            outline-color: #9575CD;
            margin-left: 15px;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            padding-top: 15px;
            color: #673AB7;
            font-weight: bold;
            margin-bottom: 20px;
        }

        form {
            width: 85%;
        }

        label {
            margin-left: 15px;
            margin-bottom: -10px;
        }

        li {
            list-style-type: none;
        }

        .btn {
            margin-left: 7.7em;
        }
    </style>
</head>

<body>

    <div class="flex-container-column card">
        <h2>EDIT PRODUK</h2>
        <form method="POST" action="proses-edit.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $pdk["id"]; ?>">
            <input type="hidden" name="gambarlama" value="<?= $pdk["gambar"]; ?>">
            <ul>
                <li>
                    <label for="produk">Produk</label>
                    <input type="text" name="produk" id="produk" autofocus="" required value="<?= $pdk["produk"]; ?>">
                </li>

                <li>
                    <label for="warna">Warna</label>
                    <input type="text" name="warna" id="warna" required value="<?= $pdk["warna"]; ?>">
                </li>

                <li>
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" id="jumlah" required value="<?= $pdk["jumlah"]; ?>">
                </li>

                <li>
                    <label for="gambar">Gambar Produk</label><br>
                    <img src="img/<?= $pdk["gambar"]; ?>" width="100px;" style="margin-left:10px;"> <br>
                    <input type="file" name="gambar" id="gambar">
                </li><br>

                <li>
                    <button type="submit" class="btn" name="submit" style="background-color: #9575CD;color:white;">Simpan Perubahan</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>