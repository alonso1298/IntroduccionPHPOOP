<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Definir o crear una clase
class Producto {
    public $nombre;
    public $precio;
    public $disponible;

    //Un constructor es una funcion que se va mandar llamar automaticamente una vez que se a creado una nueva instancia 
    public function __construct(string $nombre, int $precio, bool $disponible) // Una funcion en una clase se le conoce como métodos y se realiza con public fuction
    {
        // Se asignan los valores del constructor a la instancia con this
        $this-> nombre = $nombre;
        $this-> precio = $precio;
        $this-> disponible = $disponible;
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