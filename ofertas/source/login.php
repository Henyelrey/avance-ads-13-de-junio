<?php
    session_start();

    include("../includes/conectar.php");
    $conexion =conectar();
    //Recibimos el usuario y contraseña del formulario
    $usuario = $_POST['txt_user'];
    $password = $_POST['txt_password'];

    /*
    echo "usuario recibido: */

    $sql="SELECT * FROM usuarios WHERE user='$usuario' AND password='$password' ";
    $resultado=mysqli_query($conexion,$sql);
    $numero_registros = mysqli_affected_rows($conexion);


    if($numero_registros==1){
        //echo "Bienvenido al sistema";
        //Creamos sesiones para guardar la identificacion del usario 'logeado'


        //creamos un array asociativo con los datos del usuario logeado en '$fila' 
        $fila=mysqli_fetch_assoc($resultado);

        $_SESSION["S_USUARIO"]= $fila['user'];
        $_SESSION["S_ROL"]= $fila['rol'];

        header("Location: ../index.php");
    }else{
        header("Location: ingresar.php?error_ingreso=abs");
    }
?>