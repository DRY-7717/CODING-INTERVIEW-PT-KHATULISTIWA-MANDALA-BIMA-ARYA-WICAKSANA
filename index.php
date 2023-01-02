<?php

require 'functions.php';

$interviews = query('SELECT * FROM interview');

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
    
    echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'index.php';
        </script>
    ";
}else{
    echo "
        <script>
        alert('Data Berhasil Ditambahkan');
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
    <title>Interview Coding</title>
</head>

<body>


    <h1>Input Data</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">email</label>
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="komentar">Komentar</label>
                </td>
                <td>
                    <input type="text" name="komentar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telp">Telpon</label>
                </td>
                <td>
                    <input type="text" name="telp">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>

        </form>
    </table>


    <h3>View Table</h3>

    <table cellpadding='10' border="1" cellspacing='0'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
            <th>Telpon</th>
            <th>Proses</th>
        </tr>

        <?php foreach ($interviews as $interview) : ?>
            <tr>
                <td>1</td>
                <td><?= $interview['nama'] ?></td>
                <td><?= $interview['email'] ?></td>
                <td><?= $interview['komentar'] ?></td>
                <td><?= $interview['telp'] ?></td>
                <td>
                    
                    <a href="edit.php?id=<?= $interview['id'] ?>">Edit</a>
                    |
                    <a href="hapus.php?id=<?= $interview['id'] ?>" onclick="return confirm('are you sure?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>