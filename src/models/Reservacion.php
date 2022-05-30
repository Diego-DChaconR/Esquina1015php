<?php 
    class Reservacion {
        private $_id;
        private $_nombre;
        private $_telefono;
        private $_sucursal;
        private $_NoPers;
        private $_horario;
        private $activo;

        public function __construct($id, $nombre, $telefono, $sucursal, $NoPers, $horario, $activo) {
            $this->setId($id);
            $this->setNombre($nombre);
            $this->setTelefono($telefono);
            $this->setSucursal($sucursal);
            $this->setNoPersonas($NoPers);
            $this->setHorario($horario);
            $this->setActivo($activo);
        }

        public function getId() {
            return $this->_id;
        }

        public function setId($id) {
            $this->_id = $id;
        }
        
        public function getNombre() {
            return $this->_nombre;
        }

        public function setNombre($nombre) {
            $this->_nombre = $nombre;
        }

        public function getTelefono() {
            return $this->_telefono;
        }

        public function setTelefono($tel) {
            $this->_telefono = $tel;
        }
        
        public function getSucursal() {
            return $this->_sucursal;
        }

        public function setSucursal($sucursal) {
            $this->_sucursal = $sucursal;
        }

        public function getNoPersonas() {
            return $this->_NoPers;
        }

        public function setNoPersonas($pers) {
            $this->_NoPers = $pers;
        }

        public function getHorario() {
            return $this->_horario;
        }

        public function setHorario($horario) {
            $this->_horario = $horario;
        }

        public function getActivo() {
            return $this->_activo;
        }

        public function setActivo($activo) {
            $this->_activo = $activo;
        }

        public function getArray() {
            $arr = array();

            $arr["id"] = $this->getId();
            $arr["nombre"] = $this->getNombre();
            $arr["telefono"] = $this->getTelefono();
            $arr["sucursal"] = $this->getSucursal();
            $arr["NoPersonas"] = $this->getNoPersonas();
            $arr["horario"] = $this->getHorario();
            $arr["activo"] = $this->getActivo();

            return $arr;
        }
    }
?>