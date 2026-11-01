<?php
session_start();

require_once 'funcions.php';

if (!isset($_SESSION['libros'])) {
    inicializarLibros();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $autor = trim($_POST['autor'] ?? '');
    $imagen = trim($_POST['imagen'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');

    if (!empty($titulo) && !empty($autor)) {
        if (isset($_SESSION['libro_editar_id'])) {
            $id = $_SESSION['libro_editar_id'];
            editarLibro($id, $titulo, $autor, $imagen, $descripcion);
            unset($_SESSION['libro_editar']);
            unset($_SESSION['libro_editar_id']);
        } else {
            agregarLibro($titulo, $autor, $imagen, $descripcion);
        }

        header('Location: home.php');
        exit();
    }
}

// Preparar variables para la vista
$libroEdicion = $_SESSION['libro_editar'] ?? null; 
$esEdicion = $libroEdicion !== null;

$titulo = $esEdicion ? $libroEdicion['titulo'] : '';
$autor = $esEdicion ? $libroEdicion['autor'] : '';
$imagen = $esEdicion ? $libroEdicion['imagen'] : '';
$descripcion = $esEdicion ? $libroEdicion['descripcion'] : '';

$username = $_SESSION['username'] ?? 'Usuario';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $esEdicion ? 'Editar Libro' : 'Añadir Libro' ?> - Biblioteca Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <h4 class="m-0">👋 Bienvenido, <?= ($username) ?></h4>
            </div>
            <a href="home.php" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Volver a la Biblioteca
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold"><?= $esEdicion ? 'Editar Libro' : 'Añadir Nuevo Libro' ?></h2>
            <p class="lead"><?= $esEdicion ? 'Modifica los campos que desees actualizar.' : 'Rellena el formulario para añadir un libro al catálogo.' ?></p>
        </div>

        <form method="POST" action="" class="mx-auto" style="max-width: 600px;">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?= ($titulo) ?>" placeholder="Título" required>
                <label for="titulo">Título</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="autor" name="autor" value="<?= ($autor) ?>" placeholder="Autor" required>
                <label for="autor">Autor</label>
            </div>

            <div class="form-floating mb-3">
                <input type="url" class="form-control" id="imagen" name="imagen" value="<?= ($imagen) ?>" placeholder="URL de la Imagen">
                <label for="imagen">URL de la Imagen</label>
            </div>

            <div class="form-floating mb-4">
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" style="height: 150px;"><?= ($descripcion) ?></textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn <?= $esEdicion ? 'btn-warning' : 'btn-primary' ?> btn-lg">
                    <?= $esEdicion ? 'Guardar Cambios' : 'Añadir Libro' ?>
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>