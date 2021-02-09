<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {
        
        $sql = "INSERT INTO valoracion (codigo, id_pregunta, si, no) VALUES ('$data->codigo', '$data->id_pregunta', '$data->si', '$data->no')";

        $result = $conn->query($sql);

        $data = [
            "title" => "Registro exitoso!",
            "message" => "Los resultados han sido registrados exitosamente",
            "type" => "success"
        ];

        echo json_encode($data);

    }

?>