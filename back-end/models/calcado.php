<?php
    require("../db.php");
    
    class Calcado {
        private $idCalcado;
        private $cor;
        private $numero;
        private $quantidade;

        protected $db;

        public function getIdCalcado(){
            return $this->idCalcado;
        }

        public function getCor(){
            return $this->cor;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function getDB(){
            return $this->db;
        }


        public function setCor($cor){
            $this->cor = $cor;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function insert($calcado) {

        }

        public function __construct(){
            $this->db = new Db();
        }

    }

    
?>