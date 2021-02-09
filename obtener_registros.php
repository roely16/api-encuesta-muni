<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    if ($data) {

        $sql = "SELECT t1.*, t2.nombre as pregunta
                FROM $data->table t1
                INNER JOIN pregunta t2
                ON t1.id_pregunta = t2.id";

        $result = $conn->query($sql);

        $items = [];

        while ($row = $result->fetch_assoc()) {
            
            $items [] = $row;

        }

        $headers = [
            [
                "text" => "ID",
                "value" => "id",
                "sortable" => true,
                "width" => "10%"
            ],
            [
                "text" => "Código",
                "value" => "codigo",
                "width" => "15%"
            ], 
            [
                "text" => "Pregunta",
                "value" => "pregunta",
                "width" => "55%%"
            ],
            [
                "text" => "Acción",
                "value" => "action",
                "align" => "end",
                "width" => "15%"
            ]
        ];

        $data = [
            "items" => $items,
            "headers" => $headers
        ];

        echo json_encode($data);

    }

?>