<?php
include "../../../includes/header.php";
include "../../../includes/conectar.php";
$conexion = conectar();

$id_postulante = $_REQUEST['id_postulante'];


$sql = "SELECT * FROM postulantes WHERE id='$id_postulante'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
?>

<form method="POST" action="actualizar_postulante.php">
<div class="row mb-3">
            <label  class="col-sm-2 col-form-label">DNI</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_dni" value="<?=$fila['dni']?>" required>
            </div>
            </div>
            
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_nombres" value="<?=$fila['nombres']?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_apellidos" value="<?=$fila['apellidos']?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Edad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txt_edad" value="<?=$fila['edad']?>" required>
                </div>
            </div>

            

    <!-- Enviamos de forma oculta el id de la empresa para poder recibir en 'actualicar_empresa.php'
    y alli hacer una correcta actualizacion -->
    <input type="hidden" value="<?php echo $fila['id']?>" name="txt_id_postulante">


    <button type="submit" class="btn btn-outline-dark">Actualizar</button>
</form>