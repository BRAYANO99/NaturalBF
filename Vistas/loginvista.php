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
         <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
         <?php
            require_once("../Lib/connection.php");//Llamado de libreria
            if(isset($_POST['login'])){
                if(!empty($_POST['correo']) && !empty($_POST['pass'])){
                    $correo = $_POST['correo'];//Variable de correo
                    $pass = $_POST['pass'];//Variable de contraseña
                    $SQL = "SELECT * FROM Usuario WHERE Correo = '".$correo."' AND Pass = '".$pass."'";
                    $result = mysqli_query($conexion_normal,$SQL);//Booleano de syntaxis de la variable SQL
                    $count = mysqli_num_rows($result);//Obtener el numero de filas
                    if($count == 1){//Si es 1
                        echo "Si existe ".$count;
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