<?php include 'includes/header.php';

declare(strict_types=1); // Declara que va a ser tipado el codigo

function sumar(int $numero1, int $numero2){
    echo $numero1 + $numero2;
}

sumar(10,20);
echo "<br>";
sumar(10,15);
echo "<br>";
sumar(10,1);



include 'includes/footer.php';