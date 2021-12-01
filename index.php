<?php
define('BASEPATH', true);
define('ROOT', dirname(__FILE__));

require dirname(__FILE__) . '/system/config.php';
require dirname(__FILE__) . '/system/core/autoload.php';
/**
 * Nivel de errores notificados
 */
error_reporting(0);

/**
 * Inicializa Router y detección de valores de la URI
 */
$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

/**
 * Validaciones e inclusión del controlador y el metodo
 */
if (!CoreHelper::validateController($controller)) {
    $controller = 'ErrorPage';
}

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";

$controller .= 'Controller';

if (!CoreHelper::validateMethodController($controller, $method)) {
    $method = 'exec';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="/assets/js/jquery-3.6.0.min.js">
    </script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        <?php
/**
 * Ejecución final del controlador, método y parámetro obtenido por URI
 */
$controller = new $controller;
$controller->$method($param);
?>
    </div>
</body>

</html>