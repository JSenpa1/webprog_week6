<?php

    //database
    $dns = "mysql:host=localhost;dbname=data_mahasiswa";
    $kunci = new PDO($dns, "root", "");

    //get post
    if(isset($_POST['nim']))
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $filename = $_FILES['foto']['name'];
        $temp_file = $_FILES['foto']['tmp_name'];
        move_uploaded_file($temp_file, "uploads/{$filename}");
        $sqlAdd = "INSERT INTO mahasiswa (nim, nama, prodi, foto) VALUES ('$nim', '$nama', '$prodi', '$filename')";
        $hasilAdd = $kunci->query($sqlAdd);
    }

    if(isset($_POST['nimUpdate']))
    {
        $nim = $_POST['nimUpdate'];
        $nama = $_POST['namaUpdate'];
        $prodi = $_POST['prodiUpdate'];
        $filename = $_FILES['fotoUpdate']['name'];
        $temp_file = $_FILES['fotoUpdate']['tmp_name'];
        move_uploaded_file($temp_file, "uploads/{$filename}");
        $sqlUpdate = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', foto='$filename' WHERE nim='$nim'";
        $hasilUpdate = $kunci->query($sqlUpdate);
    }

    $sql = "SELECT * FROM mahasiswa";
    $hasil = $kunci->query($sql);

    //if(isset($nim))
    //$sqlAdd

    //if(isset($nimUpdate)
    //$sqlUpdate

    //if(isset($nimDelete))
    //sqlDelete

    // echo "<pre>";
    // $row = $hasil->fetch(PDO::FETCH_ASSOC);
    // var_dump($row);
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
            <td><img src="uploads/<?= $row['foto'] ?>" /></td>
            <td>
                <button onclick="window.location.href='edit.php?nim=<?= $row['nim'] ?>'">Edit</button> 
                <br />
                <button onclick="window.location.href='delete.php?nim=<?= $row['nim'] ?>'" name="delete">Delete</button> 
            </td>
        </tr>

        <?php
            }
        ?>
    </table>
    <a href="form.php">Add Mahasiswa to Database</a>
</body>
</html>