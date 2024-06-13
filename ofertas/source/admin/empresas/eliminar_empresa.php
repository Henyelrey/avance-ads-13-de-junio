<?php

//Invocamos a conectar.php para acceder a la D.B.
include "../../../includes/conectar.php";
$conexion = conectar();

//recibimos el id de la empresa a eliminar
$id_empresa= $_REQUEST['id_empresa'];

$sql="DELETE FROM empresas
        WHERE id='$id_empresa' ";

//Ejectamos la secuencia SQL anterior
mysqli_query($conexion, $sql);

//echo "Empresa actualizada correctamente.";
//para ver los datos modificados
header("Location: listar_empresas.php");