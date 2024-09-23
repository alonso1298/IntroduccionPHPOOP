<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Definir o crear una clase
class Producto {

    //Un constructor es una funcion que se va mandar llamar automaticamente una vez que se a creado una nueva instancia 
    // Public son modificacores de acceso
    public function __construct(public string $nombre, public int $precio, public bool $disponible) // En PHP8 se agrega directamente con public sin necesidad de poner el this y declarar las variables
    {

    }
}

$producto = new Producto('Tablet', 200, true);

echo '<pre>';
var_dump($producto);
echo '</pre>';

// Se puede instanciar multiples productos
$producto2 = new Producto('Montor Curvo', 400, false);

echo '<pre>';
var_dump($producto2);
echo '</pre>';

include 'includes/footer.php';