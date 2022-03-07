<?php include 'includes/header.php';

$carrito = ["tablet", "television", "Laptop"];

// Utilidad para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Agregar un elemento al final del array
$carrito[3] = "Nuevo Producto...";

// Añadir un elemento nuevo al final: array_push(nombre_arreglo, valor_agregar);
array_push($carrito, "Audifonos");

// Añadir al inicio
array_unshift($carrito, "Mouse");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Forma alternativa de declarar un array
$clientes = array("cliente 1", "cliente 2", "cliente 3");
echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';