<?php

    
    $json_str = file_get_contents('Actors.json');

    //elimino el BOM del UTF-8
    $json_str = str_replace("\xEF\xBB\xBF",'',$json_str); 

    // convierto a array
    $json_arr = json_decode($json_str, true);

    
    //Si esta vacio...
    if(!$json_arr) {
        $json_arr = array();
    }

    // Agrego datos.
    $json_arr[] = $_POST;


    // Hago el encode.
    $json_str_done = json_encode($json_arr);

    file_put_contents('Actors.json', $json_str_done);

?>
