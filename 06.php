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

include 'includes/footer.php';