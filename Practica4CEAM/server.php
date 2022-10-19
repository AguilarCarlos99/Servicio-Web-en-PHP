<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos)
    {
        if ($datos == "Frutas")
        {
            return join(",", array
            ("Guineo",
            "Melon",
            "Sandia",
            "Fresa",
            "Guanabana",
            "Kiwi",
            "Uva"));
        }
        else
        {
            return "No se encontro Frutas";
        }
    }
    $server = new soap_server();//creamos instancia de soap
    $server->register ("getFrutas");//Indica el metodo o funcion a devolver
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>