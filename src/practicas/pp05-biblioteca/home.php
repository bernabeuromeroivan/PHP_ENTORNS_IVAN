<?php
session_start();
require_once 'funcions.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

inicializarLibros();

$esAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
$libros = $_SESSION['libros'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

    <!-- Encabezado del usuario -->
    <header class="bg-white py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="m-0">Bienvenido, <strong><?= ($_SESSION['username']); ?></strong></h4>
            <a href="logout.php" class="btn btn-warning btn-sm">
                Cerrar sesión ❌
            </a>
        </div>
    </header>

    <div class="container pb-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Biblioteca Virtual</h1>
            <p class="lead text-muted">Disfruta explorando nuestra colección de libros</p>
        </div>

        <?php if ($esAdmin): ?>
            <div class="text-center mb-4">
                <a href="add_edit_book.php" class="btn btn-outline-success btn-lg">
                    <i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Libro
                </a>
            </div>
        <?php endif; ?>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php if (empty($libros)): ?>
                <div class="col-12">
                    <div class="alert alert-info text-center">No hay libros disponibles en el catálogo.</div>
                </div>
            <?php else: ?>
                <?php foreach ($libros as $index => $libro): ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="<?= ($libro['imagen']) ? ($libro['imagen']) : 'https://via.placeholder.com/300x200?text=Sin+Imagen' ?>" 
                                 class="card-img-top" 
                                 alt="Portada de <?= ($libro['titulo']) ?>"
                                 style="height: 250px; object-fit: cover;">
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold"><?= ($libro['titulo']) ?></h5>
                                <p class="card-text text-muted mb-2"><strong>Autor:</strong> <?= ($libro['autor']) ?></p>
                                <p class="card-text flex-grow-1"><?= ($libro['descripcion']) ?></p>
                                
                                <?php if ($esAdmin): ?>
                                    <div class="mt-auto pt-3 d-flex gap-2 border-top">
                                        <a href="add_edit_book.php?id=<?= $index ?>" class="btn btn-warning btn-sm w-100 d-flex align-items-center justify-content-center gap-1">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <a href="delete_book.php?id=<?= $index ?>" 
                                        class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('¿Seguro que deseas eliminar este libro?');">
                                            Eliminar
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>