<?php include 'includes/header.php';

// Definir o crear una clase
class Producto {
    public $nombre;
    public $precio;
    public $disponible;
}

$producto = new Producto();
$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;

echo '<pre>';
var_dump($producto);
echo '</pre>';

// Se puede instanciar multiples productos
$producto2 = new Producto();
$producto2->nombre = 'Television';
$producto2->precio = 400;
$producto2->disponible = false;

echo '<pre>';
var_dump($producto2);
echo '</pre>';

include 'includes/footer.php';