<?php
defined('BASEPATH') or exit('No se permite acceso directo');

// require_once ROOT . '/app/models/Registro/RegistroModel.php';
require_once LIBS_ROUTE . 'Session.php';

/**
 * Registro controller
 */
class InicioController extends Controller
{
    private $model;

    private $session;

    public function __construct()
    {

        $this->modelRadicaciones = new RadicacionesModel();
        $this->session = new Session();
        $this->session->init();
        if (!$this->session->get('idusuario')) {
            header('Location: ?login');
        }
    }

    public function exec()
    {
        // consiltamos las radicaciones
        $radicaciones = $this->modelRadicaciones->getRadicaciones();
        // echo"<pre>";
        // print_r($radicaciones);
        // echo"</pre>";
        // exit();

        $this->render(__CLASS__, ['radicaciones' => $radicaciones]);
    }

    public function salir()
    {
        $this->session->close();
        header('Location: ?login');
    }

}
