<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label>Nim</label>
        <input type="text" name="nim" />
        <br />
        <label>nama</label>
        <input type="text" name="nama" />
        <br />
        <label>prodi</label>
        <input type="text" name="prodi" />
        <br />
        <label>foto</label>
        <input type="file" name="foto" />
        <br />
        <button type="submit">Submit</button>
    </form>
</body>
</html>