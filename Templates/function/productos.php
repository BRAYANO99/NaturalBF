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
                <button class="btn btn-primary" type="button" name="btnAccion" value="Agregar" type="submit">
                    Agregar al carrito
                </button>
            </div>
        </div>
        </d>
        ';
    }
?>