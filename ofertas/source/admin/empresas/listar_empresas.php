<?php
    include "../../../includes/header.php";
    include "../../../includes/conectar.php";
    $conexion=conectar();

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listado de empresas</h1>


        <?php
        $sql="SELECT * FROM empresas";  //SQL para extraer empresas de la DB
        $registros=mysqli_query($conexion,$sql);    //Ejecuta la SQL

        echo '<button type="button" class="btn btn-outline-dark" onClick="f_crear_empresa()">Crear empresa</button>';

        //Tabla para mostrar los registros
        echo'<table class="table table-dark table-hover" >';    //Inicio de tabla httml

        //Encabezado de tabla
        echo '<th>Razón social</th>';
        echo '<th>RUC</th>';
        echo '<th>Teléfono</th>';
        echo '<th>Correo Electrónico</th>';
        echo '<th>Dirección</th>';
        echo '<th>Acciones</th>';
        while($fila=mysqli_fetch_assoc($registros)){    //Bucle para mostrar registro registro
            echo '<tr>';    //Inicio de fila
            echo '<td>'.$fila['razon_social'].'</td>';
            echo '<td>'.$fila['ruc'].'</td>';
            echo '<td>'.$fila['telefono'].'</td>';
            echo '<td>'.$fila['correo'].'</td>';
            echo '<td>'.$fila['direccion'].'</td>';


            echo '<td>';
            echo '<button type="button" class="btn btn-outline-light" 
            onClick="f_editar_empresa(' .$fila['id']. ')">Editar</button>';


            echo '<button type="button" class="btn btn-outline-danger" 
            onClick="f_eliminar_empresa(' .$fila['id']. ')">Eliminar</button>';
            echo '</td>';
            
            echo '</tr>';//Fin de fila
        }
        echo '</table>';    //Fin de la tabla httml
        ?>

            
    </div>
</main>
<?php
    include "../../../includes/footer.php";
?>

<script>
    function f_crear_empresa(){
        //llama al archivo crear_empresa.php
        location.href="crear_empresa.php";
    }

    function f_editar_empresa(idEmpresa){
        //alert("Se detecto en la empresa" +idEmpresa);
        location.href="editar_empresa.php?id_empresa="+idEmpresa;
    }

    function f_eliminar_empresa(idEmpresa){
        if(confirm("Estaaas seguro de eliminar registro?")){
            location.href="eliminar_empresa.php?id_empresa="+idEmpresa;
        }else{
            alert("Todo bien, no se ha eliminado nada")
        }
        
    }
</script>

