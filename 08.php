<?php include 'includes/header.php';

require 'vendor/autoload.php';

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes; // Cuando se coloca de esa forma se puede eliminar el namespace
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$detalles = new App\Detalles(); // para acceder a una clase con Namespace se pone el nombre que se dio seguido de un \ y despues el nombre de la clase
echo '<br>';
$clientes = new Clientes();  // No se usa el namespace ya que tenemos el use 
echo '<br>';

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));
print_r($decoded);

// Pass a stdClass in as the third parameter to get the decoded header values
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;

/**
 * You can add a leeway to account for when there is a clock skew times between
 * the signing and verifying servers. It is recommended that this leeway should
 * not be bigger than a few minutes.
 *
 * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
 */
JWT::$leeway = 60; // $leeway in seconds
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

include 'includes/footer.php';