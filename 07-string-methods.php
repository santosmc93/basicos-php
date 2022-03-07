<?php include 'includes/header.php';

$nombre_cliente = "Carlos Santos ";

// Conocer la extension de un string
echo strlen($nombre_cliente);
var_dump($nombre_cliente);

// Eliminar espacios de un string al inicio y al final
$texto = trim($nombre_cliente);
var_dump($texto);

// Convertirlo a mayusculas
echo strtolower($nombre_cliente);
$mail = "Correo@Correo.Com";
echo strtolower($mail);

var_dump($mail);

// Revisar si un string existe
echo strpos($nombre_cliente, "Carlos");

// Concatenar a strings
$tipo_cliente = "Premium";
echo "El cliente " . $nombre_cliente . "es " . $tipo_cliente;



include 'includes/footer.php';