<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {

        $sql = "UPDATE rango SET codigo = '$data->codigo', id_pregunta = '$data->id_pregunta' WHERE id = '$data->id'";

        $result = $conn->query($sql);

        foreach ($data->extremos as $extremo) {
            
            $extremo->uno = !empty($extremo->uno) ? "'$extremo->uno'" : "NULL";
            $extremo->dos = !empty($extremo->dos) ? "'$extremo->dos'" : "NULL";
            $extremo->tres = !empty($extremo->tres) ? "'$extremo->tres'" : "NULL";
            $extremo->cuatro = !empty($extremo->cuatro) ? "'$extremo->cuatro'" : "NULL";
            $extremo->cinco = !empty($extremo->cinco) ? "'$extremo->cinco'" : "NULL";

            $sql = "UPDATE detalle_rango SET uno = $extremo->uno, dos = $extremo->dos, tres = $extremo->tres, cuatro = $extremo->cuatro, cinco = $extremo->cinco WHERE id_extremo = $extremo->id AND id_rango = $data->id";

            $result = $conn->query($sql);

        }

        $data = [
            "title" => "Excelente!",
            "message" => "Los resultados han sido editados exitosamente",
            "type" => "success"
        ];

        echo json_encode($data);

    }

?>