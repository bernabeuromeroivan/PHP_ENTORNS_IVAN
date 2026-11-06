<?php
session_start();
if (!isset($_SESSION['basuras'])){
    $_SESSION['basuras'] = [
        [
            "id" => 0,
            "container" => "Organico",
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTexlFh31n7wWpvZwaahKOajt7ikwPqjX-yj4VGWjAdiQ&s=10",
            "elemento" => 0,
        ],
        [
            "id" => 1,
            "container" => "Plastico",
            "img" => "https://reducereutilizarecicla.org/web/app/uploads/2020/05/img-amarillo-contenedor@2x.png",
            "elemento" => 0,
        ],
        [
            "id" => 2,
            "container" => "Cristal",
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdwcKXZ4MEjvX_OtkaQN8lA-_m8dtxDwWGDo9_dEhgvw&s=10",
            "elemento" => 0,
        ],
        [
            "id" => 3,
            "container" => "Papel",
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBwk3AufTXKssyKBpyiERTVQhzMmDK6CidOuA9Il6nfw&s=10",
            "elemento" => 0,
        ],
        [
            "id" => 4,
            "container" => "Residuos",
            "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzOCNy4fS7zjf5CQQRBdJN8ngs4a8N947aYWAIdITbKA&s=10",
            "elemento" => 0,
        ]
    ];
}

?>