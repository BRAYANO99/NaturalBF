<table class="table table-light table-bordered">
    <?php
        $SQL = "SELECT Nombre FROM Usuario WHERE ID_Usuario = '".$_SESSION['ID_Usuario']."' ";
        $result = mysqli_query($conexion_normal,$SQL);
        $consulta = mysqli_fetch_array($result);
        echo "<h2>Nombre del cliente ".$consulta['Nombre']." </h2>";
    ?>
    <br><br>
    <h3>Verifica que tu compra sea la deseada</h3>
    Vez algun producto erroneo o una cantidad no desada puedes regresar a <a href="carrito.php">Carrito</a>
    <br><br>
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad por Kg</th>
            <th width="20%" class="text-center">Precio Unitario</th>
            <th width="20%" class="text-center">Total</th>
        </tr>
        <?php
            $total=0;
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
        ?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?>Kg</td>
            <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
            <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2)?></td>
        </tr>
        <?php
            $total = $total + ($producto['PRECIO']*$producto['CANTIDAD']);
            }?>
        <tr>
            <td colspan="2" align="right"><h3>Total a pagar</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4">
                <form action="" method="post">
                    <label for="my-input">Domicilio a entregar</label>
                    <input type="text" id="my-input" name="Domicilio" class="form-control" placeholder="Escribe el domicilio a entregar" required>
                    <label for="my-input">Tarjeta</label>
                    <input maxlength="16" name="Tarjeta" onkeypress="return Number(event)" type="text" id="my-input" class="form-control" placeholder="Escribe tu numero de tarjeta bancaria" required>
                    <label for="my-input">CVV</label>
                    <input maxlength="3" type="text" id="my-input" name="CVV" class="form-control" placeholder="CVV" onkeypress="return Number(event)" required>
                    <input type="hidden" name="Total" id="cantidad" value="<?php echo $total?>">
                    <br>
                    <br>
                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pagar" name="btnAccion">
                        Pagar $<?php echo number_format($total,2)?>
                    </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
<script>
    function Number(event){
        if(event.charCode >= 48 && event.charCode <= 57){
            return true;
        }
            return false; 
        }
</script>