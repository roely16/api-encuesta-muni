<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require_once('db.php');

    $data = json_decode(file_get_contents("php://input"), false, 512, 1);

    $zonas = [
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "21",
        "24",
        "25"
    ];

    $rangos = [
        "1824",
        "2534",
        "3544",
        "4554",
        "55AD"
    ];

    foreach ($zonas as &$zona) {
        
        // Por cada rango 

        foreach ($rangos as &$rango) {
            
            $codigo_m = $zona . $rango . "M";

            $sql = "INSERT INTO codigo (codigo) VALUES ('$codigo_m')";

            $result = $conn->query($sql);

            $codigo_f = $zona . $rango . "F";

            $sql = "INSERT INTO codigo (codigo) VALUES ('$codigo_f')";

            $result = $conn->query($sql);

        }

    }

?>