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
    
	<link rel="stylesheet" href="css/estilos_loginregister.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	

</head>  
<body>
 <form class="formulario" method="POST">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" class="letras" placeholder="Nombre Completo" name="nombre" required>
         </div>
         <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="email" placeholder="Correo Electronico" name="correo" required>
         </div>
         <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="pass" required>
         </div>
         <input type="submit" value="Registrate" class="button" name="registro">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
     </div>
     <?php //Codigo php
        require_once("../Global/connection.php");
        
        
        if(isset($_POST['registro'])){
            if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['pass'])){
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $pass = $_POST['pass'];
                $SQL = "SELECT * FROM Usuario WHERE Correo = '".$correo."'";
                $res = mysqli_query($conexion_normal,$SQL);
                $count = mysqli_num_rows($res);
                if($count < 1){
                    $SQL = "INSERT INTO Usuario (ID_Telegram, Nombre, Correo, Pass) VALUES (0,'".$nombre."','".$correo."','".$pass."')";
                    if(mysqli_query($conexion_normal,$SQL)){
                        ?>
                            <script>alert('Registro hecho');</script>
                        <?php
                        header("Location: index.html");
                    }else{
                        ?>
                            <h3>Registro Erroneo</h3>
                        <?php
                    }
                }else{
                    ?>
                        <h3>Este correo ya esta utilizado</h3>
                    <?php
                }
            }
        }
     ?>
    </form>
</body>
<script>
    $(".letras").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 45) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
</script>
</html>