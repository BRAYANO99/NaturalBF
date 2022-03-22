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
?>
<br>
<h4>Historial</h4>
<table class="table">
    <thead>
        <tr>
        <th scope="col">ID de Pedido</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Fecha y hora</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $SQL = "SELECT * FROM Ventas WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."' ORDER BY Fecha DESC";
            $resultados = mysqli_query($conexion_normal,$SQL);
            while($consulta = mysqli_fetch_array($resultados)){
                ?>
                <tr>
                    <th scope="row"><a class="badge badge-light" href=""><?php echo $consulta['ID_Venta']?></a></th>
                    <td><?php echo $consulta['Domicilio']?></td>
                    <td><?php echo $consulta['Fecha']?></td>
                    <td>
                        <?php
                            if($consulta['Entrega'] == 1){
                                ?>
                                    <span class="badge badge-pill badge-success">Entregado</span>
                                <?php
                            }else{
                                ?>
                                    <span class="badge badge-pill badge-warning">En espera</span>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<?php
    //Contenido de pie de pagina
    include "function/pie.php";
?>