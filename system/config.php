<?php
defined('BASEPATH') or exit('No se permite acceso directo');

$http = 'http://';
if (isset($_SERVER['HTTPS'])) {
    if (('on' == strtolower($_SERVER['HTTPS'])) || ('1' == $_SERVER['HTTPS'])) {
        $http = 'https://';
    }
} elseif (isset($_SERVER['SERVER_PORT']) && ('443' == $_SERVER['SERVER_PORT'])) {
    $http = 'https://';
}
$dominio = $_SERVER['HTTP_HOST'];
$carpeta = '';

$ruta = $http . $dominio;

//////////////////////////////////////
// Valores de uri
/////////////////////////////////////
$_SERVER['REQUEST_URI'];
define('URI', $_SERVER['REQUEST_URI']);

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

//////////////////////////////////////
// Valores de rutas
/////////////////////////////////////

// define('ROOT', $_SERVER['DOCUMENT_ROOT']);

define('PATH_VIEWS', ROOT . '/app/views/');

define('PATH_CONTROLLERS', ROOT.'/app/controllers/');

define('HELPER_PATH', ROOT.'/system/helpers/');

define('LIBS_ROUTE', ROOT . '/system/libs/');

//////////////////////////////////////
// Valores de core
/////////////////////////////////////

define('CORE', ROOT.'/system/core/');
define('DEFAULT_CONTROLLER', 'Login');

//////////////////////////////////////
// Valores de base de datos
/////////////////////////////////////

define('HOST', 'localhost:3307');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'pruebasic');

//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////

define('ERROR_REPORTING_LEVEL', -1);