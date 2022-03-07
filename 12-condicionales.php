<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if($autenticado && $admin){
    echo "Usuario autenticado";
} else {
    echo "Usuario no validado";
}

$cliente = [
    "nombre" => "Carlos",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "Premium"
    ]
];

echo "<br>";
if(empty($cliente)){
    echo "El arreglo del cliente esta vacio";
} else {
    echo "El arreglo de cliente contiene datos";
}

echo "<br>";
if($cliente["saldo"] > 0){
    echo "Usted puede comprar";
} else {
    echo "No tiene recursos para comprar";
}

echo "<br>";
if($cliente["saldo"] > 0){
    echo "El cliente tiene saldo";
} else if ($cliente["informacion"]["tipo"] === "Premium"){
    echo "El cliente es premium";
} else {
    echo "Usuario sin saldo o no es premium";
}

$tecnologia = "C";

switch ($tecnologia){
    case "PHP":
        echo "PHP lo aprendo porque lo necesito para el trabajo";
        break;

    case "Javascript":
        echo "Javascript sirve para todo";
        break;

    default:
        echo "No se que lenguaje sea";
}



include 'includes/footer.php';