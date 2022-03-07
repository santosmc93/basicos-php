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

foreach($productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"]; ?> </p>
        <p>precio: <?php echo "$" . $producto["precio"]; ?> </p>
        <!-- Operador ternario -->
        <p><?php echo($producto["disponible"])?"Disponible":"No Disponible";?></p>
        <?php 
            // if($producto["disponible"] === true){
            //     echo "<p>Disponible</p>";
            // } else {
            //     echo "<p>No disponible</p>";
            // }
            
        ?> 
        
    </li>
    <?php
    
}


include 'includes/footer.php';