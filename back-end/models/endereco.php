<?php

    include('../db.php');

    class Endereco {
        private $idEndereco;
        private $rua;
        private $cidade;
        private $cep;
        private $estado;
        private $complemento;
        private $bairro;
        private $numero;

        public function getidEndereco(){
            return $this->idEndereco;
        }

        public function getRua(){
            return $this->rua;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function getCep(){
            return $this->cep;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function getComplemento(){
            return $this->complemento;
        }

        public function getBairro(){
            return $this->bairro;
        }
        
        public function getNumero(){
            return $this->numero;
        }

        public function setRua($rua){
            $this->rua = $rua;
        }

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }

        public function setCep($cep){
            $this->cep = $cep;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function __construct(){

        }

    }


?>