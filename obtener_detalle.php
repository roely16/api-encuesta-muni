<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {

        $sql = "SELECT *
                FROM $data->tabla
                WHERE id = $data->id";

        $result = $conn->query($sql);

        $pregunta = $result->fetch_assoc();

        // Si es de tipo Rango
        if ($data->tabla == 'rango') {
            
            $sql =  "   SELECT *
                        FROM detalle_rango t1
                        INNER JOIN extremo t2
                        ON t1.id_extremo = t2.id
                        WHERE id_rango = $data->id";

            $result = $conn->query($sql);

            $extremos = [];

            while ($row = $result->fetch_assoc()) {
                
                $extremos [] = $row;

            }

            $pregunta["extremos"] = $extremos;
            
        }

        echo json_encode($pregunta);

    }

?>