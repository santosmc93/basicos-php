<?php include 'includes/header.php';

// los arrays asociativos son similares a los objetos en Javascript, se accede a su valor por medio de una propiedad
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium",
        "rango" => "leyenda",
        "temporada" => [
            "nivel" => 2
        ]
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Para acceder a la propiedad del arreglo es necesario escribir el nombre al que queremos accecer
echo $cliente["nombre"];
// Para acceder a la informacion dentro de otro array es necesario expresarlo como array bidimencional.
echo $cliente["informacion"]["tipo"];
echo $cliente["informacion"]["rango"];
echo $cliente["informacion"]["temporada"]["nivel"];



include 'includes/footer.php';