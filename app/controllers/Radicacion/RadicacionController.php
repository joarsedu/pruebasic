<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once LIBS_ROUTE . 'Session.php';

/**
 * Radicacion controller
 */
class RadicacionController extends Controller
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
        $this->render(__CLASS__);
    }

    public function nueva()
    {
        $this->render('RadicacionNueva');
    }

    public function guardar()
    {
        $nombresol = $_POST['nombresol'];
        $fecha = $_POST['fecha'];
        $asunto = $_POST['asunto'];
        $texto = $_POST['texto'];
        
        // procedemos a guardar
        $result = $this->modelRadicaciones->guardar($nombresol, $fecha, $asunto, $texto, $this->session->get('idusuario'));
        // var_dump($result);
        header('Location: ?inicio');

    }

    public function editar($id)
    {
        // consultamos los datos
        $result = $this->modelRadicaciones->getRadicacion($id);
        //   print_r($result);
        $this->render('RadicacionEditar', $result);

    }
    public function modificar()
    {
        $id = $_POST['id'];
        $nombresol = $_POST['nombresol'];
        $fecha = $_POST['fecha'];
        $asunto = $_POST['asunto'];
        $texto = $_POST['texto'];

        // procedemos a guardar
        $result = $this->modelRadicaciones->modificar($id, $nombresol, $fecha, $asunto, $texto);
        // var_dump($result);
        header('Location: ?inicio');

    }

}
