<?php

    $city = "Toluca";

    $key = "53c30e20dbd5eb95598f841c975b00d8";

    $units = "metric";


    $curl = curl_init(); //CONEXION REMOTA "EXTERNA" INICIALIZAMOS

    $url = "api.openweathermap.org/data/2.5/weather?q=" .$city . "&appid=" .$key. "&units=" . $units;

    curl_setopt($curl, CURLOPT_URL, $url); //URL PARA CONECTARSE A LA API POR URL

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET"); //PARAMETRO PARA EL METODO PARA CONECTAR A LA API POR EL METODO GET

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //VERIFICADOR SI ES SEGURO TRUE OR FALSE (HTTP O HTTPS)
    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //ESTABLECEMOS LA ACEPTACION DE RESPUESTA DEL SERVIDOR REMOTO

    $result = curl_exec($curl); //SE EJECUTA LA CONEXION REMOTA Y SE ALMACENA EN LA VARIABLE $RESULT 

    //var_dump($result); //RESULTADOS MOSTRAOS EN CADENA
    //var_dump(json_decode($result)); //DECODIFICACION JSON CON APUNTADORES

    $array = json_decode($result, true); //json_decode($result);
    //var_dump($array);

    //echo "<h1>La longitud es" . $array['coord']['lon'] . "</h1>" .  "<br>"; 
    //echo "<h1>La latitud es" . $array['coord']['lat'] . "</h1>" .  "<br>";

    //echo "<h1>La temperatura es " . $array['main']['temp'] . " ºC</h1>" .  "<br>";


    curl_close($curl); //SE CIERRA LA CONECION AL SERVIDOR REMOTO

?>