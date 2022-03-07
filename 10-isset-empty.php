<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Pedro", "Juan", "Karen");
$cliente = [
    "nombre" => "Carlos",
    "saldo" => 200
];

// Empty: saber si un array esta vacio
var_dump(empty($clientes));
echo "<br>";

// isset: Revisa si un arreglo esta creado o una propiedad esta definida
var_dump(isset($clientes4));
echo "<br>";
var_dump(isset($clientes));
echo "<br>";

// isset: tambien ayuda para saber si existe una propiedad dentro de un arreglo
var_dump(isset($cliente["false"]));


include 'includes/footer.php';