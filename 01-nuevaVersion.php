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
    
    // Metodos en clases
    public function mostrarProducto() {
        echo 'El producto es: ' . $this->nombre . ' y su precio es de: ' . $this->precio;
    }
}

$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto(); // La sintaxis de flecha es igual para metodos propiedades

echo '<pre>';
var_dump($producto);
echo '</pre>';

$producto2 = new Producto('Montor Curvo', 400, false);

$producto2->mostrarProducto();

echo '<pre>';
var_dump($producto2);
echo '</pre>';

include 'includes/footer.php';