<!DOCTYPE html>
<html lang="en">
<!--Probanfo -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Iniciar sesión</title>
</head>

<body>

    <header class="container-fluid mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logosoft.png" class="p-2" alt="SenaSoft 2020" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <div class="my-2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="text-dark a-menu" href="https://sena.territorio.la" target="_blank">Territorium</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="max-width: 1000px">
        <div class="container-fluid bg-white border shadow text-center">
            <div class="row">
                <div class="col-sm-4 centrar">
                    <div class="container">
                        <img src="assets/img/logo.png" width="80px" alt="Imagen fondo">
                        <h6 class="text-white pt-3">SERVICIO NACIONAL DE APRENDIZAJE</h6>
                        <span class="text-white">SENASOFT</span>
                    </div>
                </div>

                
                <div class="col-sm-8 p-5">
                    <h4 class="text-muted pb-4">Iniciar sesión</h4>
                    <div class="form-group">
                    <form action="?c=Usuarios&a=validar" method="POST">
                        <input type="number" name="no_documento"class="form-control p pb-4" placeholder="Usuario">
                    </div>
                    <div class="form-group pt-1">
                        <input type="password" name="clave" class="form-control p pb-4" placeholder="Contraseña">
                    </div>
                    <div class="form-group pt-3">
                        <input type="submit" class="form-control btn btn-info" value="Iniciar sesión">
                        </form>
                    </div>
                    <div class="form-group pt-3">
                        <span class="text-dark">¿No tienes una cuenta?</span>
                        <a href="?c=Usuarios&a=registro">Registrate</a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
