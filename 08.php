<?php include 'includes/header.php';

// Incluir la otras clases
function mi_autoload($clase) { // Se crea la funcion la cual va a recibir una clase
    require __DIR__ . '/clases/' . $clase . '.php'; // Le requerimos la ruta donde se encuentran estas clases
}

spl_autoload_register('mi_autoload'); // AutoLoad busca las clases segun se van importando 

$detalles = new Detalles();
echo '<br>';
$clientes = new Clientes();

include 'includes/footer.php';