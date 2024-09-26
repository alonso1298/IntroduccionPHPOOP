<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=biernesraices_crud', 'root', '56457977Ac*');

// 1-Creamos el query 
$query = "SELECT titulo, imagen FROM propiedades";

// 2-Lo Preparamos
$stmt = $db->prepare($query);

// 3-Lo ejecutamos
$stmt->execute();

// 4-Obtener los resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC);

// 5-Iterar sobre los resultados
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo '<br>';
    echo $propiedad['imagen'];
    echo '<br>';
endforeach;

// echo '<pre>';
// var_dump($resultado);
// echo '</pre';

include 'includes/footer.php';