<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'db_pegawai');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = $conn->query("SELECT * FROM pegawai");
// $sql = mysqli_query($conn, "SELECT * FROM pegawai");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database SQL - Menampilkan data dari Database</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($sql as $row) : ?>
            <tr>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['jk'] == 'l' ? 'Laki-laki' : 'Perempuan'; ?></td>
                <td><a href="">Edit</a>|<a href="">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>