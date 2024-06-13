<?php

//Invocamos a conectar.php para acceder a la D.B.
include "../../../includes/conectar.php";
$conexion = conectar();

//recibimos el id de la empresa a eliminar
$id_postulante= $_REQUEST['id_postulante'];

$sql="DELETE FROM postulantes
        WHERE id='$id_postulante' ";

//Ejectamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

//echo "Empresa actualizada correctamente.";
//para ver los datos modificados
header("Location: listar_postulantes.php");