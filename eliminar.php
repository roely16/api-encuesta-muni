<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {

        $sql = "DELETE FROM $data->tabla WHERE id = $data->id";

        $result = $conn->query($sql);

        if ($result) {
            
            $data = [
                "title" => "Excelente!",
                "message" => "El registro a sido eliminado exitosamente",
                "type" => "success"
            ];

        }

        echo json_encode($data);

    }

?>