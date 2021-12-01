<?php
/**
 *
 */
class LogsModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set($usuario_crea, $sentencia)
    {
        $sentencia = $this->db->real_escape_string($sentencia);

        $query = "INSERT INTO logs VALUES (null, '$usuario_crea', now(), '$sentencia')";
        $this->db->query($query);

        return boolval($this->db->insert_id);
    }
}
