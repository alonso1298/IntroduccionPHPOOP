<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Métodos Estaticos

class Producto {

    public $imagen;
    public static $imagenPlaceholder = 'Imagen.jpg';

    public function __construct(public string $nombre, public int $precio, public bool $disponible, string $imagen) // Se elminia el public a la imagen para que no sea obligatorio
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }
    public static function obtenerImagenProducto(){ // para hacer referencia a un atributo static se utiliza self 
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto(){ // Un método estatico no necesita instanciarse con this
        echo 'Obteniendo datos del producto...';
    }
    
    public function mostrarProducto() : void {
        echo 'El producto es: ' . $this->nombre . ' y su precio es de: ' . $this->precio;
    }
    
    public function getNombre() : string { 
        return $this->nombre;
    }

    public function setNombre(string $nombre) { 
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true, '');
// $producto->mostrarProducto();

echo $producto->obtenerImagenProducto();

echo $producto->getNombre();

echo '<pre>';
var_dump($producto);
echo '</pre>';

$producto2 = new Producto('Celular', 400, false, 'monitor curvo.jpg');
// $producto->mostrarProducto();

echo $producto2->obtenerImagenProducto();

echo $producto2->getNombre();

echo '<pre>';
var_dump($producto2);
echo '</pre>';

include 'includes/footer.php';