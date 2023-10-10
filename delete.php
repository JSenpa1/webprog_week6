<?php

function phpAlert($tempNim)
{
    echo '<script type="text/javascript">alert("' . $tempNim . '");location="index.php"</script>';
}

if(isset($_GET['nim']))
{
    $nim = $_GET['nim'];
    $tempNim = $_GET['nim'];
    $dns = "mysql:host=localhost;dbname=data_mahasiswa";
    $kunci = new PDO($dns, "root", "");

    $sqlDelete = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $hasil = $kunci->query($sqlDelete);
    phpAlert("Data ". $tempNim . " sudah di delete");
    var_dump($tempNim);
}


//sqlDelete

//buka database, delete abis itu kasi tombol balik ke index
//bilang uda selesai di hapus

// <?php
// // delete.php

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];

//     // Connect to the database
//     $connectDatabase = new mysqli("localhost", "root", "", "data_mahasiswa");

//     // Check if the connection was successful
//     if ($connectDatabase->connect_error) {
//         die("Connection failed: " . $connectDatabase->connect_error);
//     }

//     // Prepare and execute the SQL DELETE query
//     $sqlDelete = "DELETE FROM mahasiswa WHERE id = ?";
//     $stmt = $connectDatabase->prepare($sqlDelete);

//     if ($stmt) {
//         $stmt->bind_param("i", $id);
//         $stmt->execute();
//         $stmt->close();
//         // Redirect back to the main page after deletion
//         header("Location: index.php");
//         exit();
//     } else {
//         echo "Error: " . $connectDatabase->error;
//     }

//     // Close the database connection
//     $connectDatabase->close();
// } else {
//     echo "No ID provided for deletion.";
// }
// ?>