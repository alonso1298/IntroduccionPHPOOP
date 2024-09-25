<?php include 'includes/header.php';

class Transporte {
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

class Bicicleta extends Transporte { // Extends se usa para heredar de otra clase

    public function getInfo() : string { // Si el método tiene cambios sutiles y se pone el mismo nobre que del padre, el método se va a reescribir
        return 'El transporte tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' personas Y NO GASTA GASOLINA';
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo '<br>';
echo $bicicleta->getRuedas();

echo '<hr>';

$auto = new Automovil(4, 5, 'Manual');
echo $auto->getInfo();
echo '<br>';
echo $auto->getRuedas();
echo '<br>';
echo $auto->getTransmision();

include 'includes/footer.php';