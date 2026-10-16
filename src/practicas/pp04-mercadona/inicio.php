<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mercadona</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <div class="container text-center my-5">
            <h1>Bienvenido a Mercadona</h1>
            <p class="lead text-muted">Por favor, completa el siguiente formulario para continuar tu compra.</p>
        </div>

        <div class="container col-md-8 col-lg-6 mb-5">
            <form action="index.php" method="POST" class="card p-4 shadow-sm">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Número de Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="600000000">
                    </div>
                    <div class="col-md-6">
                        <label for="img" class="form-label">URL de la imagen</label>
                        <input type="url" class="form-control" id="img" name="img">
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-success w-100">Continuar compra</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
            crossorigin="anonymous"></script>
</body>
</html>