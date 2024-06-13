<?php

//Invocamos a conectar.php para acceder a la D.B.
include "../../../includes/conectar.php";
$conexion = conectar();

//recibimos los datos del forumulario
$dni = $_POST['txt_dni'];
$nombres = $_POST['txt_nombres'];
$apellidos = $_POST['txt_apellidos'];
$edad = $_POST['txt_edad'];
$correo = $_POST['txt_correo'];
$telefono = $_POST['txt_telefono'];
$direccion = $_POST['txt_direccion'];
$estado_civil = $_POST['txt_estado_civil'];

//sentencia SQL para guardar los datos de la nueva empresa
$sql="INSERT INTO 
    postulantes(dni, nombres, apellidos, edad, correo, telefono, direccion, estado_civil) 
    values('$dni', '$nombres', '$apellidos', '$edad', '$correo', '$telefono', '$direccion', '$estado_civil')";

//Ejectamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

if (isset($_SESSION["S_ROL"])) {
    header("Location: listar_postulantes.php");
}else {
    header("Location: ../../../index.php?gokuname=$nombres&gokucorreo=$correo&gokutelefono=$telefono");    
}

