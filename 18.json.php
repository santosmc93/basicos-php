<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Television",
        "precio" => 250,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor curvo",
        "precio" => 300,
        "disponible" => false
    ]    
];

echo "<pre>";
var_dump($productos, JSON_UNESCAPED_UNICODE);


$json = json_encode($productos); // Convierte el array productos a formato json
var_dump($json);

$json_array = json_decode($json); // Convierte un json a un array
var_dump($json_array);
echo "</pre>";




include 'includes/footer.php';