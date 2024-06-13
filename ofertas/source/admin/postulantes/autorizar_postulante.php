<?php

// Invocamos a conectar.php para acceder a la base de datos
include("../../../includes/conectar.php");
$conexion = conectar();

// Recibimos el id del postulante a autorizar
$id_postulante = $_REQUEST['id_postulante'];

// Sacamos los datos del postulante a autorizar
$sql = "SELECT * FROM postulantes WHERE id='$id_postulante'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

$usuario_nuevo = $fila['correo'];
$password_nuevo = $fila['dni'];

// Guardamos los datos en la tabla usuarios
$sql_du = "INSERT INTO usuarios (user, password, rol)
           VALUES ('$usuario_nuevo', '$password_nuevo', '3')";
mysqli_query($conexion, $sql_du);

$sql = "UPDATE postulantes SET autorizado='1' WHERE id='$id_postulante'";

// Ejecutamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

// Para ver al postulante autorizado, listamos:
header("Location: listar_postulantes.php");
?>

