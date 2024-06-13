<?php

//Invocamos a conectar.php para acceder a la D.B.
include "../../../includes/conectar.php";
$conexion = conectar();

//recibimos el id de la empresa a modificar
$id_postulante= $_POST['txt_id_postulante'];

//recibimos los datos del formulario para la actualización
$dni = $_POST['txt_dni'];
$nombres = $_POST['txt_nombres'];
$apellidos = $_POST['txt_apellidos'];
$edad = $_POST['txt_edad'];

$sql="UPDATE postulantes 
    SET dni='$dni',  
        nombres         ='$nombres',
        apellidos      ='$apellidos',
        edad   ='$edad'
        
    WHERE id='$id_postulante'
        ";

//Ejectamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

//echo "Empresa actualizada correctamente.";
//para ver los datos modificados
header("Location: listar_postulantes.php");