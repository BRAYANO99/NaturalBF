<?php
    //Conexion a la base de datos
    include '../Global/connection.php';
    //Conexion para la encriptación
    include "../Global/config_encrypt.php";
    //Funcion carrito con el mensaje
    include 'function/carrito.php';
    //Contenido de Cabecera
    include "function/cabecera.php";
?>
<br>
    <?php if($mensaje!=""){?>
        <!--Alerta de carrito-->
        <div class="alert alert-success">
            <?php 
            echo $mensaje;
            ?>
            <a href="carrito.php" class="badge badge-success">Ver carrito</a>
        </div>
    <?php } ?>
        <!--Zona de los elementos a seguir-->
        <div class="row">
            <?php
                //Metodo para mostrar los productos
                include 'function/productos.php';
            ?>       
        </div>
    </div>
    <script>
        $(function () {//Funcion de popover
            $('[data-toggle="popover"]').popover();//Revisa que todos las etiquetas tengan data-toggle="popover" para hacer la animación
        });
    </script>
<?php
    //Contenido de pie de pagina
    include "function/pie.php";
?>