<?php include 'includes/header.php';

// Buscar elementos en un array
$carrito = array("Tablet", "Computadora", "Television");

var_dump(in_array("Tablet", $carrito));
echo "<br>";
var_dump(in_array("Television", $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1,3,5,4,7, 2, 6);
sort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar array asociativo
$cliente = [
   "nombre" => "Carlos",
   "saldo" => 300,
   "tipo" => "Premium" 
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// asort ordena el array asociativo por valor (orden alfabetico)
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// ksort ordela el array asociativo por propiedad (orden alfabetico)
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';