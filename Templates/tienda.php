<?php
    //Conexion a la base de datos
    include '../Global/connection.php';
    //Conexion para la encriptación
    include "../Global/config_encrypt.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS de BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--JS de BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script><!--Script de bootstrap para la descripcion-->
    <title>Tienda</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!--Logo de la empresa con link para el inicio-->
        <a class="navbar-brand" href="index.php"><img src="img/logotipo.png" alt="Inicio" width="45px"></a>
        <!--Boton que se muestra cuando la pantalla es de un celular-->
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrito(0)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br/>
    <br/>
    <div class="container">
        <br>
        <!--Alerta de carrito-->
        <div class="alert alert-success">
            <?php 
            include "function/carrito.php";
            echo $mensaje;
            ?>
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>
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
</body>
</html>