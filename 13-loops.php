<?php include 'includes/header.php';

$i = 0;

// Do while
while($i<10){
    echo $i;
    echo "<br>";

    $i++;
}
echo "<br>";

// Do while
$i=0;

do {
    echo $i;
    echo "<br>";

    $i++;
} while($i < 10);
echo "<br>";

// For
for($i=0; $i < 10; $i++){
    if($i % 3 == 0){
        echo $i . " - Fizz" . "<br>";
    }

}
echo "<br>";

// Foreach
$clientes = array("Pedro", "Juan", "Karen");

foreach($clientes as $cliente){
    echo $cliente . "<br>";
}



include 'includes/footer.php';