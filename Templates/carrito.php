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
<h3>Lista del carrito</h3>
<?php
    //Contenido de productos en el carrito
    include "function/productosacomprar.php";
    //Contenido de pie de pagina
    include "function/pie.php";
?>