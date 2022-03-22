<?php
    session_start();
    if(!isset($_SESSION['ID_Usuario'])){
        header("Location: tienda.php");
    }
?>
<?php
    //Conexion a la base de datos
    include '../Global/connection.php';
    //Contenido de Cabecera de la sección de account
    include "function/cabecera_profile.php";
    //Funcion de los botones
    include 'function/editardatos.php';
?>
<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
        Editar Datos
    </h4>
<?php
    $SQL = "SELECT * FROM Usuario WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."'";
    $result = mysqli_query($conexion_normal,$SQL);
    $consulta = mysqli_fetch_array($result);
    $correo_actual = $consulta['Correo'];
    $nombre_actual = $consulta['Nombre'];
?>
<form action="" method="post">
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">
                <hr class="border-light m-0">
                <div class="card-body">
                    <div class="form-group">
                    <label class="form-label">Nombre Completo</label>
                    <input type="text" maxlength="70" class="form-control" name="Usuario" value="<?php echo $nombre_actual?>" required>
                    </div>
                    <div class="form-group">
                    <label class="form-label">E-mail de Usuario</label>
                    <input type="text" class="form-control mb-1" maxlength="20" name="Email" value="<?php echo $correo_actual?>" required>
                    </div>
                    <h4>Ingresa la contraseña para guardar cambios</h4>
                    
                    <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" maxlength="20" name="Pass" required>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary" name="btnEditar" value="Datos">Guardar datos</button>
    </div>
</form>
</form>
    <h4 class="font-weight-bold py-3 mb-4">
        ID de telegram
    </h4>
<form action="" method="post">
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">
                <hr class="border-light m-0">
                
                <div class="card-body">
                    <h5>Puedes obtener tu ID de telegram con el siguiente <a target="_blank" href="https://t.me/myidbot">Bot</a> usar el boton de verificar para mandar un mensaje de prueba</h5>
                    <div class="form-group">
                    <label class="form-label">ID de Telegram</label>
                    <input type="hidden" name="Nombre" value="<?php echo $nombre_actual?>">
                    <input name="Codigo" onkeypress="return Number(event)" type="text" minlength="9" maxlength="15" class="form-control" maxlength="20" required>
                    <br>
                    <button type="submit" class="btn btn-info" name="btnEditar" value="Verificar_Telegram">Verificar</button>
                    </div>
                    <h4>Ingresar contraseña para confirmar</h4>
                    <label class="form-label">Contraseña</label>
                    <input name="Pass" type="password" class="form-control" maxlength="20" required>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary" name="btnEditar" value="Telegram">Confirmar ID de Telegram</button>
    </div>
</form>
    <h4 class="font-weight-bold py-3 mb-4">
        Cambiar Contraseña
    </h4>
<form action="" method="post">
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">
                <hr class="border-light m-0">
                <div class="card-body">
                    <div class="form-group">
                    <label class="form-label">Contraseña nueva</label>
                    <input name="Pass1" type="password" minlength="11" class="form-control" maxlength="20" required>
                    </div>
                    <div class="form-group">
                    <label class="form-label">Confirmar contraseña nueva</label>
                    <input name="Pass2" type="password" minlength="11" class="form-control" maxlength="20" required>
                    </div>
                    <h4>Ingresar contraseña anterior para confirmar</h4>
                    <label class="form-label">Contraseña anterior</label>
                    <input name="PassOld" type="password" class="form-control" maxlength="20" required>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary" name="btnEditar" value="Pass">Cambiar contraseña</button>
    </div>
</div>
</form>
<script>
    function Number(event){
        if(event.charCode >= 48 && event.charCode <= 57){
            return true;
        }
            return false; 
        }
</script>
<?php
    //Contenido de pie de pagina
    include "function/pie.php";
?>