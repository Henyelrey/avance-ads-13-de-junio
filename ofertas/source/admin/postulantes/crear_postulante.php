<?php
include "../../../includes/header.php";
?>
<main>
    <div class="container-fluid px-4">

    <?php
    //Condicionamos el titulo del formulario para un usuario logeado o bien para
    //un usuario publico
        if (isset($_SESSION["S_ROL"])) {
            echo '<h1 class="mt-4">Crear nuevo postulante</h1>';
        }else {
            echo '<h1 class="mt-4">Registro de nuevo postulante</h1>';
        }
    ?>


        <!--Aqui creamos el formulario para crear un nuevo postulante-->
        <form method="POST" action="guardar_postulante.php">
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">DNI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_dni" required>
                </div>
            </div>
            
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_nombres" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_apellidos" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Edad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txt_edad" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txt_correo" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txt_telefono" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txt_direccion" required>
                </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Estado Civil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txt_estado_civil" required>
                </div>
            </div>        
            
            <button type="submit" class="btn btn-outline-dark">Guardar</button>
        </form>
        <!--Aqui terminamos el formulario para crear un nuevo postulante -->

    </div>
</main>
<?php
include "../../../includes/footer.php";
?>