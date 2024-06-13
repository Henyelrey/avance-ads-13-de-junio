<?php

//Invocamos a conectar.php para acceder a la D.B.
include "../../../includes/conectar.php";
$conexion = conectar();

//recibimos el id de la empresa a modificar
$id_empresa= $_POST['txt_id_empresa'];

//recibimos los datos del forumulario para la actualización
$razon = $_POST['txt_razon_social'];
$ruc = $_POST['txt_ruc'];
$correo = $_POST['txt_correo'];
$direccion = $_POST['txt_direccion'];
$telefono = $_POST['txt_telefono'];

$sql="UPDATE empresas 
    SET razon_social='$razon',  
        ruc         ='$ruc',
        correo      ='$correo',
        direccion   ='$direccion',
        telefono    ='$telefono'
    WHERE id='$id_empresa'
        ";

//Ejectamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

//echo "Empresa actualizada correctamente.";
//para ver los datos modificados
header("Location: listar_empresas.php");