<?php
    include('../db.php');
    
    class Modelo {
        private $idModelo;
        private $nome;
        private $marca;
        private $material;
        private $publico;
        private $tipoFechamento;
        private $valor;
        private $amortecedor;
        private $palmilha;
        protected $db;

        public function __construct(){
            $this->db = new Db();
        }

        public function getIdModelo(){
            return $this->idModelo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getMarca(){
            return $this->marca;
        }
        
        public function getMaterial(){
            return $this->material;
        }

        public function getPublico(){
            return $this->publico;
        }

        public function getTipoFechamento(){
            return $this->tipoFechamento;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getAmortecedor(){
            return $this->amortecedor;
        }

        public function getPalmilha(){
            return $this->palmilha;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setMaterial($material){
            $this->material = $material;
        }

        public function setPublico($publico){
            $this->publico = $publico;
        }

        public function setTipoFechamento($tipoFechamento){
            $this->tipoFechamento = $tipoFechamento;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function setAmortecedor($amortecedor){
            $this->amortecedor = $amortecedor;
        }

        public function setPalmilha($palmilha){
            $this->palmilha = $palmilha;
        }


    }

?>