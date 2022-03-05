<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS de BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--JS de BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Tienda</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!--Logo de la empresa con link para el inicio-->
        <a class="navbar-brand" href="index.php">Logo de la empresa</a>
        <!--Boton que se muestra cuando la pantalla es de un celular-->
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrito(0)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br/>
    <br/>
    <div class="container">
        <br>
        <!--Alerta de carrito-->
        <div class="alert alert-success">
            Pantalla de mensaje
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>
        <!--Zona de los elementos a seguir-->
        <div class="row">
            <d class="col-3">
                <div class="card">
                    <img
                    title="Título producto"
                    alt="Titulo"
                    class="card-img-top"
                    src="../Archivos/Img/Achiote.jpg">
                    <div class="card-body">
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripción</p>
                        <button class="btn btn-primary" type="button" name="btnAccion" value="Agregar" type="submit">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </d>
            <d class="col-3">
                <div class="card">
                    <img
                    title="Título producto"
                    alt="Titulo"
                    class="card-img-top"
                    src="../Archivos/Img/Achiote.jpg">
                    <div class="card-body">
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripción</p>
                        <button class="btn btn-primary" type="button" name="btnAccion" value="Agregar" type="submit">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </d>
            <d class="col-3">
                <div class="card">
                    <img
                    title="Título producto"
                    alt="Titulo"
                    class="card-img-top"
                    src="../Archivos/Img/Achiote.jpg">
                    <div class="card-body">
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripción</p>
                        <button class="btn btn-primary" type="button" name="btnAccion" value="Agregar" type="submit">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </d>
            <d class="col-3">
                <div class="card">
                    <img
                    title="Título producto"
                    alt="Titulo"
                    class="card-img-top"
                    src="../Archivos/Img/Achiote.jpg">
                    <div class="card-body">
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripción</p>
                        <button class="btn btn-primary" type="button" name="btnAccion" value="Agregar" type="submit">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </d>
            <d class="col-3">
                <div class="card">
                    <img
                    title="Título producto"
                    alt="Titulo"
                    class="card-img-top"
                    src="../Archivos/Img/Achiote.jpg">
                    <div class="card-body">
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripción</p>
                        <button class="btn btn-primary" type="button" name="btnAccion" value="Agregar" type="submit">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </d>
        </div>
    </div>
</body>
</html>