<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Encapsulación 

class Producto {

    // public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // protected - Se puede acceder unicamente en la clase 
    // private - Solo miembros de la misma clase pueden acceder a el

    public function __construct(public string $nombre, public int $precio, public bool $disponible) 
    {

    }
    
    public function mostrarProducto() : void {
        echo 'El producto es: ' . $this->nombre . ' y su precio es de: ' . $this->precio;
    }
    
    public function getNombre() : string { // Obtener un valor utilizamos get 
        return $this->nombre;
    }

    public function setNombre(string $nombre) { // Modificar un valor utilizamos set
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
// $producto->mostrarProducto();
echo $producto->getNombre();
$producto->setNombre('Celular');

echo '<pre>';
var_dump($producto);
echo '</pre>';



include 'includes/footer.php';