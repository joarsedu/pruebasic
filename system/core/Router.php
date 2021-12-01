<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/**
 * Identificacion de la URI
 */
class Router
{
  /**
   * @var string
   */
  public $uri;

  /**
   * @var string
   */
  public $controller;

  /**
   * @var string
   */
  public $method;

  /**
   * @var string
   */
  public $param;

  /**
   * Inicializa los atributos
   */
  public function __construct()
  {
    $this->setUri();
    $this->setController();
    $this->setMethod();
    $this->setParam();
  }

  /**
   * Asigna la uri completa
   */
  public function setUri()
  {
    $pos = strpos(URI, '?');
    if ($pos === false) {
      $this->uri = ['', '', ''];
    } else {
      $uriInicial = explode('?', URI);
      $this->uri = explode('/', $uriInicial[1]);
    }
  }

  /**
   *Asigna el nombre del controlador
   */
  public function setController()
  {
    $this->controller = $this->uri[0] === '' ? DEFAULT_CONTROLLER : $this->uri[0];
  }

  /**
   * Asigna el nombre del metodo
   */
  public function setMethod()
  {
    $this->method = !empty($this->uri[1]) ? $this->uri[1] : 'exec';
  }

  /**
   * Asigna el valor del parametro si existe segun el metodo de peticion
   */
  public function setParam()
  {
    if (REQUEST_METHOD === 'POST')
      $this->param = $_POST;
    else if (REQUEST_METHOD === 'GET')
      $this->param = !empty($this->uri[2]) ? $this->uri[2] : '';
  }

  /**
   * @return $uri
   */
  public function getUri()
  {
    return $this->uri;
  }

  /**
   * @return $controller
   */
  public function getController()
  {
    return ucfirst($this->controller);
  }

  /**
   * @return $method
   */
  public function getMethod()
  {
    return ucfirst($this->method);
  }

  /**
   * @return $param
   */
  public function getParam()
  {
    return $this->param;
  }
}
