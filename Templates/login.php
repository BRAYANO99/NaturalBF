<?php
    session_start();
    if(isset($_SESSION['ID_Usuario'])){
        header("Location: tienda.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="css/estilos_loginregister.css">
	

</head>  
<body>
    <form class="formulario" method="POST">
    
    <h1>Login</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="correo">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="pass">
         
         </div>
         <input type="submit" value="Login" class="button" name="login">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registrar.php">Registrate </a></p>
         <?php //Codigo php
            require_once("../Global/connection.php");//Llamado de libreria
            if(isset($_POST['login'])){
                if(!empty($_POST['correo']) && !empty($_POST['pass'])){
                    $correo = $_POST['correo'];//Variable de correo
                    $pass = $_POST['pass'];//Variable de contraseña
                    $SQL = "SELECT ID_Usuario FROM Usuario WHERE Correo = '".$correo."' AND Pass = '".$pass."'";
                    $result = mysqli_query($conexion_normal,$SQL);//Booleano de syntaxis de la variable SQL
                    $consulta = mysqli_fetch_array($result);
                    $count = mysqli_num_rows($result);//Obtener el numero de filas
                    if($count == 1){//Si es 1    
                        $_SESSION['ID_Usuario'] = $consulta['ID_Usuario'];//Almacena el ID
                        if(isset($_SESSION['Pago'])){
                            echo"<script>alert('Procede a pagar por que la session de pago es ".$_SESSION['Pago']."');</script>";
                            header("Location: pagar.php");
                        }else{
                            header("Location: tienda.php");
                        }
                    }else{//Si es más de 1 o 0  
                        echo "Error";
                    }
                }
            }
         ?>
     </div>
    </form>
</body>
</html>