<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
 <form class="formulario" method="POST">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre Completo" name="nombre">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="correo">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="pass">
         
         </div>
         <input type="submit" value="Registrate" class="button" name="registro">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
     </div>
     <?php //Codigo php
        require_once("../Global/connection.php");
        
        
        if(isset($_POST['registro'])){
            if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['pass'])){
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $pass = $_POST['pass'];
                $SQL = "INSERT INTO Usuario (Nombre, Correo, Pass) VALUES ('".$nombre."','".$correo."','".$pass."')";
                if(mysqli_query($conexion_normal,$SQL)){
                    ?>
                        <h3>Registro Hecho</h3>
                    <?php
                }else{
                    ?>
                        <h3>Registro Erroneo</h3>
                    <?php
                }
            }
        }
     ?>
    </form>
</body>
</html>