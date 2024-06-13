<?php
    include "../../../includes/header.php";
    include "../../../includes/conectar.php";
    $conexion=conectar();

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listado de postulantes</h1>

        <?php
        $sql="SELECT * FROM postulantes";  //SQL para extraer postulantes de la DB
        $registros=mysqli_query($conexion,$sql);    //Ejecuta la SQL

        echo '<button type="button" class="btn btn-outline-dark" onClick="f_crear_postulante()">Crear Postulante</button>';

        //Tabla para mostrar los registros
        echo'<table class="table table-dark table-hover" >';    //Inicio de tabla httml

        //Encabezado de tabla
        echo '<th>Dni</th>';
        echo '<th>Nombres</th>';
        echo '<th>Apellidos</th>';
        echo '<th>Edad</th>';
        echo '<th>Correo</th>';
        echo '<th>Telefono</th>';
        echo '<th>Dirección</th>';
        echo '<th>Estado Civil</th>';
        echo '<th>Autorizado</th>';
        echo '<th>Acciones</th>';
        
        
        while($fila=mysqli_fetch_assoc($registros)){    //Bucle para mostrar registro registro
            echo '<tr>';    //Inicio de fila
                echo '<td>'.$fila['dni'].'</td>';
                echo '<td>'.$fila['nombres'].'</td>';
                echo '<td>'.$fila['apellidos'].'</td>';
                echo '<td>'.$fila['edad'].'</td>';
                echo '<td>'.$fila['correo'].'</td>';
                echo '<td>'.$fila['telefono'].'</td>';
                echo '<td>'.$fila['direccion'].'</td>';
                echo '<td>'.$fila['estado_civil'].'</td>'; 
                echo '<td>'.$fila['autorizado'].'</td>'; 

                echo '<td>';

                echo '<button type="button" class="btn btn-outline-light" 
                onClick="f_editar_postulante('.$fila['id'].')">Editar</button>';


                echo '<button type="button" class="btn btn-outline-danger" 
                onClick="f_eliminar_postulante('.$fila['id'].')">Eliminar</button>';

                echo '<button type="button" class="btn btn-outline-success" 
                onClick="f_autorizar_postulante('.$fila['id'].')">Autorizar</button>';

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
    function f_crear_postulante(){
        //llama al archivo crear_postulante.php
        location.href="crear_postulante.php";
    }
    function f_editar_postulante(idPostul){
        //alert("Se detecto en la empresa" +idEmpresa);
        location.href="editar_postulante.php?id_postulante="+idPostul;
    }

    function f_eliminar_postulante(idPostul){
        if(confirm("Estaaas seguro de eliminar registro?")){
            location.href="eliminar_postulante.php?id_postulante="+idPostul;
        }else{
            alert("Todo bien, no se ha eliminado nada")
        }
        
    }

    function f_autorizar_postulante(idPostul){
        if(confirm("desea proceder con la autorizacion")){
            location.href="autorizar_postulante.php?id_postulante="+idPostul;
        }else{
            alert("Todo bien, no se ha autorizado nada")
        }
    }
</script>