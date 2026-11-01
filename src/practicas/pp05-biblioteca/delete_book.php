<?php
session_start();
require_once 'funcions.php';

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    if (isset($_GET['id']) && ($_GET['id'])) {
        $id = $_GET['id'];
        eliminarLibro($id);
    }
}

header('Location: home.php');
exit();
?>