<?php 
/**
* 
*/
class UsuarioModel extends Model
{

  private $usuario_crea = "";
  
  public function __construct()
  {
    parent::__construct();
    $this->modelLogs = new LogsModel();
    $this->session = new Session();
    $this->session->init();
    $this->usuario_crea = $this->session->get('idusuario') ?? '';

  }

  public function getUsuario($email)
  {
    $email = $this->db->real_escape_string($email);
    $sql = "SELECT id, email, password, intentos, bloqueado FROM usuarios WHERE email = '{$email}'";
    $this->modelLogs->set($this->usuario_crea, $sql);
    return $this->db->query($sql)->fetch_assoc();
  }

  public function intentoFallido($id, $intentos)
  {
    $sql = "UPDATE usuarios 
              SET intentos='$intentos'
              WHERE id = $id";
    $this->modelLogs->set($this->usuario_crea, $sql);
    $this->db->query($sql);
    
    return true;
    
  }

  public function bloquear($id)
  {
    $sql = "UPDATE usuarios 
              SET bloqueado='1'
              WHERE id = $id";
    $this->modelLogs->set($this->usuario_crea, $sql);
    $this->db->query($sql);
    
    return true;
    
  }

  public function desbloquear($id)
  {
    $sql = "UPDATE usuarios 
              SET bloqueado='0', intentos='0'
              WHERE id = $id";
    $this->modelLogs->set($this->usuario_crea, $sql);
    $this->db->query($sql);
    
    return true;
    
  }

}