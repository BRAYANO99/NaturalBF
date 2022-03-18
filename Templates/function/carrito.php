<?php
    session_start();//Inicio de control de sesiones
    $mensaje="";
    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){
            case 'Agregar':
                if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID = openssl_decrypt($_POST['id'],COD,KEY);
                }else{
                }
                if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                    $NOMBRE = openssl_decrypt($_POST['nombre'],COD,KEY);
                }else{
                    break;
                }
                if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                    $CANTIDAD= openssl_decrypt($_POST['cantidad'],COD,KEY);
                }else{
                    break;
                }
                if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                    $PRECIO = openssl_decrypt($_POST['precio'],COD,KEY);               
                }else{
                    break;
                }
                if(!isset($_SESSION['CARRITO'])){//Si no hay sesion activa de carrito inicia desde 0 (Carrito vacio)
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        'PRECIO'=>$PRECIO
                    );
                    $_SESSION['CARRITO'][0]=$producto;//Primer Producto, inicia session del carrito
                    $mensaje = "Producto agregado al carrito";
                }else{//El carrito tiene productos
                    $idProductos=array_column($_SESSION['CARRITO'],"ID");
                    if(in_array($ID,$idProductos)){
                        foreach($_SESSION['CARRITO'] as $indice=>$producto){
                            if($producto['ID']==$ID){
                                $a = number_format($producto['CANTIDAD']) + 1;
                                $_SESSION['CARRITO'][$indice]=array(
                                    'ID'=>$producto['ID'],
                                    'NOMBRE'=>$producto['NOMBRE'],
                                    'CANTIDAD'=>$a,
                                    'PRECIO'=>$producto['PRECIO']
                                );
                                echo "<script>alert('El producto ya ha sido agregado por lo que fue sumado');</script>";
                            }
                        }
                        $mensaje="";
                    }else{
                        $NumeroProductos=count($_SESSION['CARRITO']);//cuenta sesiones del carrito o numero de productos
                        $producto=array(
                            'ID'=>$ID,
                            'NOMBRE'=>$NOMBRE,
                            'CANTIDAD'=>$CANTIDAD,
                            'PRECIO'=>$PRECIO
                        );
                        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                        $mensaje = "Producto agregado al carrito";
                    }
                }
                
            break;

            case "Eliminar":
                if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID = openssl_decrypt($_POST['id'],COD,KEY);
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){
                        if($producto['ID']==$ID){
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script>alert('Elemento borrado...');</script>";
                        }
                    }
                }
            break;

            case "Cantidad":
                if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                    $cantidad_cambiar = $_POST['cantidad'];
                    $ID = openssl_decrypt($_POST['id'],COD,KEY);
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){
                        if($producto['ID']==$ID){
                            if($producto['ID']==$ID){
                                $_SESSION['CARRITO'][$indice]=array(
                                    'ID'=>$producto['ID'],
                                    'NOMBRE'=>$producto['NOMBRE'],
                                    'CANTIDAD'=>$cantidad_cambiar,
                                    'PRECIO'=>$producto['PRECIO']
                                );
                                echo "<script>alert('Cantidad cambiada');</script>";
                            }
                        }
                    }
                }
            break;
        }
    }
?>