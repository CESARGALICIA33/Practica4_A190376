<?php
    require_once "lib/nusoap.php";
    function getCiudades($datos) {
        if($datos == "Ciudades"){
            return join(",", array(
                "Tuxtla Gutierrez",
                "Bangladesh",
                "Brooklyn",
                "Okland"));
        }
        else{
            return "No hay Ciudades";
        }
    }
    $server = new soap_server();//creamos la instancia soap
    $server->register("getCiudades");
    if( !isset( $HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>