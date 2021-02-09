<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $sql = "SELECT * FROM codigo";

    $result = $conn->query($sql);

    $codigos = [];

    while ($row = $result->fetch_assoc()) {
        
        $codigos [] = $row;

    }

    $sql = "SELECT * FROM pregunta";

    $result = $conn->query($sql);

    $preguntas = [];

    while ($row = $result->fetch_assoc()) {
        
        $preguntas [] = $row;

    }

    $sql = "SELECT * FROM extremo";

    $result = $conn->query($sql);

    $extremos = [];

    while ($row = $result->fetch_assoc()) {
        
        $row["uno"] = null;
        $row["dos"] = null;
        $row["tres"] = null;
        $row["cuatro"] = null;
        $row["cinco"] = null;

        $extremos [] = $row;

    }

    $data = [
        "codigos" => $codigos,
        "preguntas" => $preguntas,
        "extremos" => $extremos
    ];

    echo json_encode($data);

?>