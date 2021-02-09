<?php 

    $servername = "192.168.190.232";
    $username = "root";
    $password = "area51";
    $dbname = "encuesta-muni";

    $conn = new mysqli($servername, $username, $password, $dbname);

    mysqli_set_charset($conn, "utf8");

    if ($conn->connect_error) {
        
        die("Connection failed " . $conn->connect_error);

    }

?>