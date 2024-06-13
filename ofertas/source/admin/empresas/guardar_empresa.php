<?php

//Invocamos a conectar.php para acceder a la D.B.
include "../../../includes/conectar.php";
$conexion = conectar();

//recibimos los datos del forumulario
$razon = $_POST['txt_razon_social'];
$ruc = $_POST['txt_ruc'];
$correo = $_POST['txt_correo'];
$direccion = $_POST['txt_direccion'];
$telefono = $_POST['txt_telefono'];
/*
echo'<br>'.$razon;
echo'<br>'.$ruc;
echo'<br>'.$correo;
echo'<br>'.$direccion;
echo'<br>'.$telefono;
*/

//sentencia SQL para guardar los datos de la nueva empresa
$sql="INSERT INTO 
    empresas(razon_social, ruc, correo, direccion, telefono) 
    values('$razon', '$ruc', '$correo', '$direccion', '$telefono')";

//Ejectamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

//echo "Empresa guardada correctamente.";
//para ver la nueva empresa creada
header("Location: listar_empresas.php");
