<?php

$usuaris = [
    [
        "username" => "admin", 
        "password" => password_hash("adminpass", PASSWORD_DEFAULT), 
        "role" => "admin"
    ],
    [
        "username" => "reader", 
        "password" => password_hash("readerpass", PASSWORD_DEFAULT), 
        "role" => "lector"
    ]
];

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuari = $_POST['user'] ?? '';
    $password = $_POST['passwd'] ?? '';
    $loginCorrecto = false;

    foreach ($usuaris as $u) {
        if ($u['username'] === $usuari && password_verify($password, $u['password'])) {
            $_SESSION['username'] = $u['username'];
            $_SESSION['role'] = $u['role'];
            $loginCorrecto = true;
            break;
        }
    }

    if ($loginCorrecto) {
        header('Location: home.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section>
        <?php for ($i = 0; $i < 180; $i++): ?>
            <span></span>
        <?php endfor; ?>
        <div class="signin">
            <div class="content text-center">
                <h2>Inicia sesión</h2>
                <form method="POST" action="">
                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Username" type="text" name="user" required>
                    </div>  
                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Password" type="password" name="passwd" required>
                    </div>
                    
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger m-2"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
                    
                    <div class="inputBox">
                        <input class="bg-warning btn mt-2" type="submit" value="Iniciar">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>