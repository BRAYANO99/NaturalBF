<?php
    session_start();
    if(!isset($_SESSION['Admin'])){
        header("Location: tienda.php");
    }
?>
<?php
    //Conexion a la base de datos
    include '../Global/connection.php';
    //Contenido de Cabecera de la sección de account
    include "function/cabecera_admin.php";
?>
<div class="row">
<?php
    $resultados = mysqli_query($conexion_normal, "SELECT * FROM Producto");
    while($consulta = mysqli_fetch_array($resultados)){//Ciclo para mostrar los productos
        //Codigo HTML
        print'
        <d class="col-3">
        <div class="card">
            <img
            title="'.$consulta['Nombre'].'"
            alt="'.$consulta['Nombre'].'"
            class="card-img-top"
            height="317px"
            src=data:image/png;base64,'.base64_encode($consulta['Imagen']).'
            >
            <div class="card-body">
            <h5 class="card-title">'.$consulta['Nombre'].'</h5>
                <form action="" method="post">
                    <input type="hidden" name="ID" id="id" value="'.$consulta['ID_Producto'].'">
                    Nombre:
                    <input type="tex" name="Nombre" id="Nombre" value="'.$consulta['Nombre'].'" required>
                    Precio por Kg:
                    <input type="number" step="any" min="1" name="Precio" id="Precio" value="'.$consulta['Precio'].'" required>
                    Descripción:
                    <textarea rows="10" cols="23" name="Descripcion" id="descripcion" required>'.$consulta['Descripcion'].'</textarea>
                    <button class="btn btn-primary" name="btnModificar" type="submit">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
        </d>
        ';
    }
    if(isset($_POST['btnModificar'])){
        $nombre = $_POST['Nombre'];
        $id = $_POST['ID'];
        $precio = number_format($_POST['Precio'],2);
        $descripcion = $_POST['Descripcion'];
        $SQL = "UPDATE Producto SET Nombre = '".$nombre."', Precio = '".$precio."', Descripcion = '".$descripcion."' WHERE ID_Producto = '".$id."'";
        if(mysqli_query($conexion_normal,$SQL)){
            echo "<script>
                alert('Cambio de datos guardado');
            </script>";
        }else{
            echo "<script>alert('Algo salio mal :c');</script>";
        }
    }
?>
</div>
<?php
    include "function/pie.php";
?>