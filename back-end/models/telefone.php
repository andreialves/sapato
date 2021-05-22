<?php
    class Telefone(){
        private $idTelefone;
        private $telefone;

        public function __construct(){ }
        
        public function getIdTelefone(){
            return $this->idTelefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

    }

?>