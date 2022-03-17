<?php
    if($_SESSION['ID_Usuario'] == 1){
        
        $_SESSION['Pago'] = 1;
        header("Location: login.php");
    }
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
<br>
<?php
    if($_POST){
        $total=0;
        foreach($_SESSION['CARRITO'] as $indidce=>$producto){
            $total = $total+($producto['PRECIO']*$producto['CANTIDAD']);
        }
        echo "<h3>".$total."</h3> ";
    }
?>
<?php
    //Contenido de pie de pagina
    include "function/pie.php";
?>

