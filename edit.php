<?php
require 'functions.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM interview WHERE id = $id")[0];




if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {

        echo "
        <script>
        alert('Data Berhasil Diedit');
        document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script>
        alert('Data Berhasil Diedit');
        document.location.href = 'index.php';
        </script>
    ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Data</h1>
    <table>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" value="<?= $mhs['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">email</label>
                </td>
                <td>
                    <input type="text" name="email" value="<?= $mhs['email'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="komentar">Komentar</label>
                </td>
                <td>
                    <input type="text" name="komentar" value="<?= $mhs['komentar'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telp">Telpon</label>
                </td>
                <td>
                    <input type="text" name="telp" value="<?= $mhs['telp'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>

        </form>
    </table>

</body>

</html>