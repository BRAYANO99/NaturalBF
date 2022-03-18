<?php
    //Conexion a la base de datos
    include '../Global/connection.php';
    //Conexion para la encriptación
    include "../Global/config_encrypt.php";
    //Funcion carrito con el mensaje
    include 'function/carrito.php';
    //Contenido de Cabecera
    include "function/cabecera.php";
    if(!isset($_SESSION['ID_Usuario'])){
        $_SESSION['Pago'] = 1;
        header("Location: login.php");
    }else{
        if(isset($_SESSION['Pago'])){
            unset($_SESSION['Pago']);
        }
    }
?>
<br>
<br>
<?php
    include "function/pagoinfo.php";
?>
<br><br>
<?php
    //Contenido de pie de pagina
    include "function/pie.php";
?>

