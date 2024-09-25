<?php include 'includes/header.php';

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes; // Cuando se coloca de esa forma se puede eliminar el namespace

// Incluir la otras clases
function mi_autoload($clase) { // Se crea la funcion la cual va a recibir una clase
    $partes = explode('\\', $clase); // explode toma 2 argumentos, uno es lo que vamos a buscar y el segundo en donde lo vamos a buscar
    require __DIR__ . '/clases/' . $partes[1] . '.php'; // Le requerimos la ruta donde se encuentran estas clases
}
spl_autoload_register('mi_autoload'); // AutoLoad busca las clases segun se van importando 

$detalles = new App\Detalles(); // para acceder a una clase con Namespace se pone el nombre que se dio seguido de un \ y despues el nombre de la clase
echo '<br>';
$clientes = new Clientes();  // No se usa el namespace ya que tenemos el use 

include 'includes/footer.php';