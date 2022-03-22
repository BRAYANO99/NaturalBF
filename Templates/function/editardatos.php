<?php
    include "../Global/bot.php";
    if(isset($_POST['btnEditar'])){
        switch($_POST['btnEditar']){
            case 'Datos'://Accion para modificar datos
                $pass = $_POST['Pass'];
                $usuario = $_POST['Usuario'];
                $email = $_POST['Email'];
                $SQL = "SELECT ID_Usuario FROM Usuario WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."' AND Pass = '".$pass."'";
                $result = mysqli_query($conexion_normal,$SQL);
                $count = mysqli_num_rows($result);
                if($count == 1){
                    $SQL = "UPDATE Usuario  SET Nombre = '".$usuario."', Correo = '".$email."' WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."' AND Pass = '".$pass."'";
                    mysqli_query($conexion_normal,$SQL);
                    echo "<script>alert('Cambios guardados');</script>";
                }else{
                    echo "<script>alert('Error al guardar cambios, verifica tu contraseña');</script>";
                }
                
                
            break;
            case 'Pass'://Accion para la contraseña
                if($_POST['Pass1'] == $_POST['Pass2']){
                    $passnew = $_POST['Pass1'];
                    $pass = $_POST['PassOld'];
                    $SQL = "SELECT ID_Usuario FROM Usuario WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."' AND Pass = '".$pass."'";
                    $result = mysqli_query($conexion_normal,$SQL);
                    $count = mysqli_num_rows($result);
                    if($count == 1){
                        $SQL = "UPDATE Usuario  SET Pass = '".$passnew."' WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."'";
                        mysqli_query($conexion_normal,$SQL);
                        echo "<script>alert('Contraseña cambiada');</script>";
                    }else{
                        echo "<script>alert('Error al guardar cambios, verifica tu contraseña');</script>";
                    }
                }else{
                    echo "<script>alert('Las contraseñas no son iguales');</script>";
                }
                
            break;
            case 'Verificar_Telegram'://Verificar codigo de telegram
                sendMessage($_POST['Codigo'], $_POST['Nombre']);
            break;
            case 'Telegram':
                $codigo = $_POST['Codigo'];
                $pass = $_POST['Pass'];
                $SQL = "SELECT ID_Usuario FROM Usuario WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."' AND Pass = '".$pass."'";
                $result = mysqli_query($conexion_normal,$SQL);
                $count = mysqli_num_rows($result);
                if($count == 1){
                    $SQL = "UPDATE Usuario  SET ID_Telegram = '".$codigo."' WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."'";
                    if(mysqli_query($conexion_normal,$SQL)){
                        echo "<script>alert('ID Registrado');</script>";
                    }else{
                        echo "<script>alert('A ocurrido un error');</script>";
                    }
                }else{

                }
            break;
        }
    }
?>