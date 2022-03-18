<?php
    if (!empty($_SESSION['CARRITO'])) {
?>
<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad por Kg</th>
            <th width="20%" class="text-center">Precio Unitario</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php
            $total=0;
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
        ?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center">
                <form action="" method="post">
                    <input type="number" name="cantidad" id="points" name="points" step="1" min="1" value="<?php echo $producto['CANTIDAD']?>">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto["ID"],COD,KEY)?>">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-warning" name="btnAccion" value="Cantidad">Cambiar cantidad</button>
                </form>
            </td>
            <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
            <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2)?></td>
            <td width="5%">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto["ID"],COD,KEY)?>">
                    <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            $total = $total + ($producto['PRECIO']*$producto['CANTIDAD']);
            }
        ?>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
                <form method="post" action="pagar.php">
                    <button class="btn btn-success btn-lg btn-block" type="submit" value="proceder" name="btnAccion">
                        Proceder a pagar >>
                    </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
<?php
    }else{
        ?>
            <div class="alert alert-succes">
                No hay productos en el carrito...
            </div>
        <?php
    }
?>