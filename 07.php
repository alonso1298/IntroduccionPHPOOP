<?php include 'includes/header.php';

// Las interfaces te permiten agrupar un grupo de declaraciones de funciones pero no las van a implementar, basicamente te dice, que funciones tiene y que data retorna pero no dice como lo hace
interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz { // Para agregar la interfaz es con la palabra reservada implements
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }

    public function getInfo() : string {
        return 'El transporte tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' personas';
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz { // El polimorfismo es cuando Hereda clases e implementan la misma interfaz y cada objeto tiene sus propios datos y forma
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }

    public function getInfo() : string {
        return 'El transporte AUTO tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' personas y tiene el color ' . $this->color;
    }

    public function getColor() : string { // Podemos agregar métodos las clases hijas y no hay problema que no este en la interface de la clase padre
        return 'El color es ' . $this->color ;
    }
}

echo '<pre>';
var_dump($transporte = new Transporte(8, 20,));
var_dump($auto = new Automovil(4, 5, 'rojo'));

echo $transporte->getInfo();
echo '<br>';
echo $auto->getInfo();
echo '<br>';
echo $auto->getColor();
echo '</pre>';

include 'includes/footer.php';