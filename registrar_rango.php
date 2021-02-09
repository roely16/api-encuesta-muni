<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {

        $sql = "INSERT INTO rango (codigo, id_pregunta) VALUES ('$data->codigo', '$data->id_pregunta')";

        $result = $conn->query($sql);

        $id_rango = $conn->insert_id;

        foreach ($data->extremos as $extremo) {
            
            $extremo->uno = !empty($extremo->uno) ? "'$extremo->uno'" : "NULL";
            $extremo->dos = !empty($extremo->dos) ? "'$extremo->dos'" : "NULL";
            $extremo->tres = !empty($extremo->tres) ? "'$extremo->tres'" : "NULL";
            $extremo->cuatro = !empty($extremo->cuatro) ? "'$extremo->cuatro'" : "NULL";
            $extremo->cinco = !empty($extremo->cinco) ? "'$extremo->cinco'" : "NULL";

            $sql = "INSERT INTO detalle_rango (id_extremo, id_rango, uno, dos, tres, cuatro, cinco) VALUES ('$extremo->id', '$id_rango', $extremo->uno, $extremo->dos, $extremo->tres, $extremo->cuatro, $extremo->cinco)";

            $result = $conn->query($sql);

        }

        $data = [
            "title" => "Excelente!",
            "message" => "Los resultados han sido registrados exitosamente",
            "type" => "success"
        ];

        echo json_encode($data);

    }

?>