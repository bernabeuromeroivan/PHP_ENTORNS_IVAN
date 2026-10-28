<?php

function inicializarLibros(){
    $_SESSION['libros'] = [
        [
            "titulo" => "Don Quijote de la Mancha",
            "autor" => "Miguel de Cervantes",
            "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl6oImUCr5Mf4i2C7SqM3CQ1BwebANJVuogJ_TOAWZIA&s=10",
            "descripcion" => "Las aventuras de un hidalgo castellano que pierde la cordura por leer libros de caballerías."
        ],
        [
            "titulo" => "Cien años de soledad",
            "autor" => "Gabriel García Márquez",
            "imagen" => "https://m.media-amazon.com/images/I/81dBNY1qgUL._UF1000,1000_QL80_.jpg",
            "descripcion" => "La historia de la familia Buendía a lo largo de siete generaciones en Macondo."
        ],
        [
            "titulo" => "1984",
            "autor" => "George Orwell",
            "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThW604f5L6J5-rFT7cuPjUUc5nKB68C1ge--tCSDDa5w&s=10",
            "descripcion" => "Novela distópica sobre un régimen totalitario que vigila a sus ciudadanos."
        ]
    ];    
}

inicializarLibros();

function agregarLibro($titulo, $autor, $imagen, $descripcion) {
    $nuevoLibro = [
        "titulo"      => trim($titulo),
        "autor"       => trim($autor),
        "imagen"      => trim($imagen),
        "descripcion" => trim($descripcion)
    ];

    $_SESSION['libros'][] = $nuevoLibro;
}

function editarLibro($id, $titulo, $autor, $imagen, $descripcion) {
    if (isset($_SESSION['libros'][$id])) {
        $_SESSION['libros'][$id] = [
            "titulo"      => trim($titulo),
            "autor"       => trim($autor),
            "imagen"      => trim($imagen),
            "descripcion" => trim($descripcion)
        ];
        return true;
    }
    return false;
}

function eliminarLibro($id) {
    if (isset($_SESSION['libros'][$id])) {
        unset($_SESSION['libros'][$id]);
        $_SESSION['libros'] = array_values($_SESSION['libros']);
        return true;
    }
    return false;
}

?>