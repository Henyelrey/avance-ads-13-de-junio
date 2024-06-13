<?php
include "includes/header.php";
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Sistema de Ofertas Laborales</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard-BL</li>

            <?php

            if (isset($_REQUEST["gokuname"])) {
            ?>
                <div class="alert alert-success" role="alert">
                    Hola <?php echo $_REQUEST['gokuname']; ?>,
                    hemos registrado de forma correcta tus datos.
                    Por favor debes esperar a que un Administrador los autorice yield
                    envie tus datos de acceso a tu correo <?php echo $_REQUEST['gokucorreo']; ?>,
                    o bien nos comunicaremos contigo al celular <?php echo $_REQUEST['gokutelefono']; ?>.
                    <br><br>

                    Gracias por registrarte en nuestro Sistema. TQM.
                </div>

            <?php
            }
            ?>
        </ol>
    </div>
</main>
<?php
include "includes/footer.php";
?>