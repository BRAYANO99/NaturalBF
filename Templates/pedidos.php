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
    //Funciones del bot
    include "../Global/bot.php";
?>
<br>
<h1>Pedidos</h1>
<table class="table">
    <thead>
        <tr>
        <th scope="col">ID de Pedido</th>
        <th scope="col">Cliente</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Entrega</th>
        <th scope="col">----</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $SQL = "SELECT * FROM Ventas";
            $resultados = mysqli_query($conexion_normal,$SQL);
            while($consulta = mysqli_fetch_array($resultados)){
                ?>
                <tr>
                    <form method="post">
                        <input type="hidden" name="ID" value="<?php echo $consulta['ID_Venta']?>">
                    <th scope="row"><a class="badge badge-light" href=""><?php echo $consulta['ID_Venta']?></a></th>
                    <td>
                        <?php
                            $SQL = "SELECT ID_Telegram, Nombre FROM Usuario WHERE ID_Usuario = '".$consulta['ID_Usuario']."'";
                            $consulta2 = mysqli_fetch_array(mysqli_query($conexion_normal,$SQL));
                            echo $consulta2['Nombre'];
                        ?>
                        <input type="hidden" name="ID_Telegram" value="<?php echo $consulta2['ID_Telegram']?>">
                        <input type="hidden" name="Nombre" value="<?php echo $consulta2['Nombre']?>">
                    </td>
                    <td><?php echo $consulta['Domicilio']?></td>
                    <td>
                        <?php
                            if($consulta['Entrega'] == 1){
                                ?>
                                    <input type="checkbox" name="Entrega" checked disabled>
                    </td>
                    <td><button type="submit" class="btn btn-info" disabled>Entregado</button></td>
                                <?php
                            }else{
                                ?>
                                    <input type="checkbox" name="Entrega" disabled>
                    </td>
                    <td><button type="submit" class="btn btn-success" name="btnEntregar">Entregar</button></td>
                                <?php
                            }
                        ?>
                    </form>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<?php
    if(isset($_POST['btnEntregar'])){
        $nombre = $_POST['Nombre'];
        $id_telegram = $_POST['ID_Telegram'];
        $id_pedido = $_POST['ID'];
        $SQL = "UPDATE Ventas SET Entrega = '1' WHERE ID_Venta = '".$id_pedido."'";
        if(mysqli_query($conexion_normal,$SQL)){
            if($id_telegram != 0){
                sendMessageEntrega($id_telegram,$nombre);
            }
            echo "<script>alert('Cambio hecho');</script>";
        }else{
            echo "<script>alert('Algo salio mal :c');</script>";
        }
    }
?>
<?php
    include "function/pie.php";
?>