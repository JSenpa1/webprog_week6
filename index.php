<?php
    $connectDatabase = new mysqli("localhost", "root", "", "data_mahasiswa");
    $dns = "mysql:host=localhost;dbname=data_mahasiswa";
    $kunci = new PDO($dns, "root", "");

    $sql = "SELECT * FROM mahasiswa";

    $hasil = $kunci->query($sql);

    // echo "<pre>";
    // $row = $hasil->fetch(PDO::FETCH_ASSOC);
    // var_dump($row);
    
    $filename = $_FILES['foto']['name'];
    echo $filename;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Foto</th>
            <th>Options</th>
        </tr>
        <?php
            while($row = $hasil->fetch(PDO::FETCH_ASSOC)) 
            {
        ?>
        
        <tr>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['prodi'] ?></td>
            <td><img src="<?= $row['foto'] ?>" /></td>
            <td><a href="#">Edit </a><a href="#">Delete</a> </td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>