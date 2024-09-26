<?php include 'includes/header.php';

// Conectar a la BD con Mysqili con la forma POO
$db = new mysqli('localhost', 'root', '56457977Ac*', 'biernesraices_crud');

// 1-Creamos el query 
$query = "SELECT titulo, imagen FROM propiedades";

// 2-Lo Preparamos
$stmt = $db->prepare($query); // Aqui no tenemos que escapar datos ni nada, eso,olo hace por nosotros prepare para mejorar el performance y la seguridad

// 3-Lo ejecutamos
$stmt->execute();

// 4-Creamos la variable 
$stmt->bind_result($titulo, $imagen);

// 5-Asignamos el resultado
while($stmt->fetch()):
    // 6-Imprimimos el resultado
    var_dump($titulo);
endwhile;

include 'includes/footer.php';