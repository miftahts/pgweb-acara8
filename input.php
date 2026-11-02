<?php
    $kecamatan       = $_POST['kecamatan'];
    $longitude       = $_POST['longitude'];
    $latitude        = $_POST['latitude'];
    $luas            = $_POST['luas'];
    $jumlah_penduduk = $_POST['jumlah_penduduk'];

   // Sesuaikan dengan setting MySQL
    $servername = "127.0.0.1";
    $username   = "root";
    $password   = "";
    $dbname     = "data_acara8";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO data_acara8 (kecamatan, luas, jumlah_penduduk)
    VALUES ('$kecamatan', $luas, $jumlah_penduduk)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location: /latihan8/index.php");
    exit;
?>