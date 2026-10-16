<?php include "data/productes.php"; ?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    .info-contacto {
        border: 1px solid #ccc;
        padding: 15px;
        margin-top: 20px;
        max-width: 300px;
    }

    .foto-perfil {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        margin-bottom: 10px;
    }
</style>

<?php
function generarTablaProductos($productos) {
    echo '<table>';
    echo '  <tr><th>Nombre</th><th>Precio</th><th>Disponibilidad</th></tr>';
    foreach ($productos as $p) {
        echo '  <tr>';
        echo '    <td>' . $p['nombre'] . '</td>';
        echo '    <td>' . $p['precio'] . ' €</td>';
        echo '    <td>' . ($p['disponibilidad'] ? 'Sí' : 'No') . '</td>';
        echo '  </tr>';
    }
    echo '</table>';
}

function muestraInfoContacto($nombre, $telefono, $img) {
    echo '<div class="info-contacto">';
    echo '  <h3>Información de Contacto</h3>';
    echo '  <img src="' . $img . '" alt="" class="foto-perfil">';
    echo '  <p><strong>Nombre:</strong> ' . $nombre . '</p>';
    echo '  <p><strong>Teléfono:</strong> ' . $telefono . '</p>';
    echo '</div>';
}

generarTablaProductos($prod);
muestraInfoContacto($nombre, $telefono, $img);
?>