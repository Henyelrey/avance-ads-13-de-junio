<?php
    //en este archivo vamos a realizar la conexión a la B.D.
    include("config.php");

    //funcion para conectarnos a la BD
    function conectar(){
        $link = new mysqli(SERVER,DB_USER,DB_PASS,DB_NAME); //Esta línea conecta a la BD de mysql. 
        if($link->connect_errno){
            echo "Error, no se ha podido conectar a la B.D.";
        }else{
            //echo "Todo bien, la conexión fue exitosa.";
            return $link;
        }
    }

   



?>