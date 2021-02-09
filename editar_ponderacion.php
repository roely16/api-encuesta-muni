<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {

        $sql = "UPDATE ponderacion SET codigo = '$data->codigo', id_pregunta = '$data->id_pregunta', bien = '$data->bien', regular = '$data->regular', mal = '$data->mal', no_encara = '$data->no_encara', ns_nr = '$data->ns_nr' WHERE id = '$data->id'";

        $result = $conn->query($sql);

        if ($result) {
            
            $data = [
                "title" => "Excelente!",
                "message" => "El registro a sido editado exitosamente",
                "type" => "success"
            ];

        }

        echo json_encode($data);

    }

?>