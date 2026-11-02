<?php
    // Sesuaikan dengan setting MySQL
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "latihan";

    // Create connection
    $conn = new mysqli("127.0.0.1", "root", "", "data_acara8");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM data_acara8";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1px'><tr>
            <th>Kecamatan</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Luas</th>
            <th>Jumlah Penduduk</th>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["kecamatan"]."</td><td>".
                $row["longitude"] . "</td><td>" .
                $row["latitude"] . "</td><td>" .
                $row["luas"]."</td><td align='right'>".
                $row["jumlah_penduduk"]."</td></tr>";
    }
    echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();
?>