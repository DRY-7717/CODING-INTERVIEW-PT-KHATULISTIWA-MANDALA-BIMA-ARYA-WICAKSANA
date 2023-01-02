<?php 

$conn = mysqli_connect('localhost','root','','db_interview');


function query($query)
{
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $komentar = htmlspecialchars($data['komentar']);
    $telp = htmlspecialchars($data['telp']);

    $query = "INSERT INTO interview VALUES (
        '', '$nama', '$email','$komentar','$telp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM interview WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $komentar = htmlspecialchars($data['komentar']);
    $telp = htmlspecialchars($data['telp']);

    $query = "UPDATE interview SET nama = '$nama', email = '$email', komentar = '$komentar', telp = '$telp' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
