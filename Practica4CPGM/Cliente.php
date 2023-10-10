<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost:82/Practica4CPGM/Server.php");

$error = $cliente->getError();
if($error){
    echo "<H2>Constructor error</H2><pre>" . $error . "</pre>";

}

$result = $cliente->call("getCiudades", array("datos" => "Ciudades"));
if($cliente->fault){
    echo "<H2>Fault</H2><pre>";
    print_r($result);
    echo "</pre>";
}
else{
    $error = $cliente->getError();
    if($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else{
        echo "<h2>Ciudades</h2><pre>";
        echo $result;
        echo "</pre>";
    }

    
}
?>