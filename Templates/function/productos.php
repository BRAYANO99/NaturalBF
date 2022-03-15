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
            width="100px"
            height="200px"
            src=data:image/png;base64,'.base64_encode($consulta['Imagen']).'
            >
            <div class="card-body">
                <span>'.$consulta['Nombre'].'</span>
                <h5 class="card-title">$'.$consulta['Precio'].'</h5>
                <button type="button" class="btn btn-secondary" data-toggle="popover" title="'.$consulta['Descripcion'].'">
                    Descripcion
                </button>
                <form action="" method="post">
                    <input type="text" name="id" id="id" value="'.openssl_encrypt($consulta['ID_Producto'],COD,KEY).'">
                    <input type="text" name="nombre" id="nombre" value="'.openssl_encrypt($consulta['Nombre'],COD,KEY).'">
                    <input type="text" name="precio" id="precio" value="'.openssl_encrypt($consulta['Precio'],COD,KEY).'">
                    <input type="text" name="cantidad" id="cantidad" value="'.openssl_encrypt("1",COD,KEY).'">
                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                        Agregar al carrito
                    </button>
                </form>
            </div>
        </div>
        </d>
        ';
    }
?>