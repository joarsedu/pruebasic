<?php
/**
 *
 */
class RadicacionesModel extends Model
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

    public function getRadicaciones()
    {
        $sql = "SELECT ra.id, ra.nombre_solicitante, ra.fecha, ra.asunto, ra.texto_solicitud, ra.fecha_crea, us.nombre
            FROM radicaciones AS ra
            INNER JOIN usuarios AS us WHERE us.id=ra.usuario_crea
            ORDER BY ra.fecha_crea ASC";

        $this->modelLogs->set($this->usuario_crea, $sql);
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function guardar($nombresol, $fecha, $asunto, $texto, $usario_crea)
    {
        $sql = "INSERT INTO radicaciones VALUES (null, '$nombresol', '$fecha', '$asunto', '$texto', '$usario_crea', now())";
        $this->modelLogs->set($this->usuario_crea, $sql);
        $this->db->query($sql);

        return boolval($this->db->insert_id);

    }

    public function getRadicacion($id)
    {
        $sql = "SELECT ra.id, ra.nombre_solicitante, ra.fecha, ra.asunto, ra.texto_solicitud, ra.fecha_crea
            FROM radicaciones AS ra
            WHERE ra.id = $id";
        $this->modelLogs->set($this->usuario_crea, $sql);
        return $this->db->query($sql)->fetch_assoc();
    }

    public function modificar($id, $nombresol, $fecha, $asunto, $texto)
    {
        $sql = "UPDATE radicaciones
              SET nombre_solicitante='$nombresol', fecha='$fecha', asunto='$asunto', texto_solicitud='$texto'
              WHERE id = $id";

        $this->modelLogs->set($this->usuario_crea, $sql);
        $this->db->query($sql);

        return true;

    }

}