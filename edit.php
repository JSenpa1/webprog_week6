<?php
    $nim = $_GET['nim'];
    $connectDatabase = new mysqli("localhost", "root", "", "data_mahasiswa");
    $dns = "mysql:host=localhost;dbname=data_mahasiswa";
    $kunci = new PDO($dns, "root", "");
    $sqlSome = "SELECT * FROM mahasiswa WHERE nim = $nim";
    $hasil = $kunci->query($sqlSome);
    $row = $hasil->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label>Nim</label>
        <input type="text" name="nimUpdate" value="<?= $row['nim'] ?>"/>
        <br />
        <label>nama</label>
        <input type="text" name="namaUpdate" value="<?= $row['nama'] ?>"/>
        <br />
        <label>prodi</label>
        <input type="text" name="prodiUpdate" value="<?= $row['prodi'] ?>"/>
        <br />
        <label>foto</label>
        <input type="file" name="fotoUpdate" />
        <br />
        <button type="submit">Submit</button>
    </form>
</body>
</html>