<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <a class="navbar-brand" href="index.php">
            <img src="data/assets/logo_mercadona.png" alt="Logo Mercadona" class="img-fluid" style="height: 50px;">
        </a>
        <div class="d-flex align-items-center">
            <h2 class="me-3 mb-0 fs-4 text-dark">Bienvenido <?= $nombre ?></h2>
            <img src="<?= $img ?>" alt="Avatar del usuario" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</header>