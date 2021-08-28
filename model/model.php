<?php

class Usuario {
    
    private $usuario;
    private $db;

    public function __construct() {
        $this->usuario = array();
        $this->db = new PDO('mysql:host=localhost;dbname=usuarios', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getUsuario() {

        self::setNames();
        $sql = "SELECT telefono, nombre, imei, tipo_celular FROM registrar_usuario";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;
        $this->db = null;
    }

    public function setUsuario($telefono, $nombre, $imei, $tipo_celular) {

        self::setNames();
        $sql = "INSERT INTO registrar_usuario(telefono, nombre, imei, tipo_celular) VALUES ('" . $telefono . "', '" . $nombre . "', '" . $imei . "', '" . $tipo_celular . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>