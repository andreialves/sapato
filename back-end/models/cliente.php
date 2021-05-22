<?php
    include('telefone.php');
    include('endereco.php');
    include('pedidos.php');
    
    class Cliente {
        private $idCliente;
        private $nome;
        private $sexo;
        private $email;
        private $cpf;
        private $enderecoPrincipal;
        private $listaEndereco;
        private $listaPedidos;
        private $listaTelefone;

        public function __construct(){
            $this->enderecoPrincipal = new Endereco();
            $this->listaEndereco = array();
            $this->listaPedidos = array();
            $this->listaTelefone = array();
        }

        public function getIdCliente(){
            return $this->idCliente;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getEnderecoPrincipal(){
            return $this->enderecoPrincipal;
        }

        public function getListaEndereco(){
            return $this->listaEndereco;
        }

        public function getListaPedidos(){
            return $this->listaPedidos;
        }

        public function getListaTelefone(){
            return $this->listaTelefone;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setEnderecoPrincipal($enderecoPrincipal){
            $this->enderecoPrincipal = $enderecoPrincipal;
        }

        public function setListaEndereco($listaEndereco){
            $this->listaEndereco = $listaEndereco;
        }

        public function setListaPedidos($listaPedidos){
            $this->listaPedidos = $listaPedidos;
        }

        public function setListaTelefone($listaTelefone){
            $this->listaTelefone = $listaTelefone;
        }


    }

?>