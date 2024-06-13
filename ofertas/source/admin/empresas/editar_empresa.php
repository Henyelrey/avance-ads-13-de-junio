<?php
include "../../../includes/header.php";
include "../../../includes/conectar.php";
$conexion = conectar();

//Recibimos el id de la empresa a modificar 
$id_empresa = $_REQUEST['id_empresa'];
//echo "Se va modificar la empresa " . $id_empresa;

//con el id recibido obtenemos losa datos de dicha empresa de la DB y los mostramos en un formulario para su modificacion
$sql = "SELECT * FROM empresas WHERE id='$id_empresa'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
?>

<form method="POST" action="actualizar_empresa.php">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Razón Social</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="txt_razon_social" required value="<?php echo $fila['razon_social'] ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">RUC</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="txt_ruc" required value="<?php echo $fila['ruc'] ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="txt_correo" required value="<?php echo $fila['correo'] ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="txt_direccion" required value="<?php echo $fila['direccion'] ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="txt_telefono" required value="<?php echo $fila['telefono'] ?>">
        </div>
    </div>

    <!-- Enviamos de forma oculta el id de la empresa para poder recibir en 'actualicar_empresa.php'
    y alli hacer una correcta actualizacion -->
    <input type="hidden" value="<?php echo $fila['id']?>" name="txt_id_empresa">


    <button type="submit" class="btn btn-outline-dark">Actualizar</button>
</form>