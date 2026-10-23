<?php
session_start();
$userCorrecte = 'Pepe';
$passwordCorrecte = password_hash("12345", PASSWORD_DEFAULT);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuari = $_POST['name'] ?? "";
    $password = $_POST['passwd'] ?? "";
    if($usuari == $userCorrecte && password_verify($password, $passwordCorrecte)){
        $_SESSION['username'] = $usuari;
        header('Location: inici.php');
        exit;
    }else{
        echo 'User o password equivocados';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nombre: </label>
        <input type="text" name="name" id="name">
        <label for="">Contrasenya: </label>
        <input type="password" name="passwd" id="passwd">
            
    </form>
</body>
</html>