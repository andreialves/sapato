<?php

    include('../showErrors.php');
    include('telefone.php');
    include('endereco.php');
    include('pedidos.php');
    include('../db.php');
    
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
        private $senha;

        public function __construct(){
            $this->enderecoPrincipal = new Endereco();
            $this->db = new Db();
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

        public function getSenha(){
            return $this->senha;
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

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function insere(){

            $query = "INSERT INTO cliente (nome, sexo, email, cpf, senha) VALUES ('{$this->nome}', '{$this->sexo}', '{$this->email}', '{$this->cpf}', '{$this->senha}');";
            echo $query;
            $resultado = pg_query($this->db->conecta(), $query) or die();
            
            $query = "SELECT idcliente FROM cliente WHERE email='{$this->email}' AND cpf='{$this->cpf}';";
            
            $resultado = pg_query($this->db->conecta(), $query) or die();

            $nColunas = pg_fetch_all($resultado, PGSQL_ASSOC);

            if (sizeof($nColunas) == 1)
                foreach($nColunas as $value){
                    $this->idCliente = $value['idcliente'];
                }

            $this->db->desconecta();
        }

        public function login(){
            $query = "SELECT idCliente FROM CLIENTE WHERE senha='{$this->senha}' AND email='{$this->email}';";
            $resultado = pg_query($this->db->conecta(), $query) or die();
            $nColunas = pg_fetch_all($resultado, PGSQL_ASSOC);
            $id = "";
            foreach($nColunas as $value){
                $id = $value['idcliente'];
            }
            $this->db->desconecta();

            return $id;
        }
        
        public function insereEnderecoPrincipal(){
            if ($this->enderecoPrincipal){
                if($this->idCliente != null){
                    $query = "INSERT INTO endereco (rua, cidade, cep, estado, complemento, bairro, numero, clienteidcliente)".
                             " VALUES ('{$this->enderecoPrincipal->getRua()}', '{$this->enderecoPrincipal->getCidade()}', '{$this->enderecoPrincipal->getCep()}',".
                             " '{$this->enderecoPrincipal->getEstado()}', '{$this->enderecoPrincipal->getComplemento()}', '{$this->enderecoPrincipal->getBairro()}',".
                             " '{$this->enderecoPrincipal->getNumero()}', '{$this->idCliente}');";
                    
                    $resultado = pg_query($this->db->conecta(), $query) or die();

                    $this->db->desconecta();
                    array_push($this->listaEndereco, $this->enderecoPrincipal);
                }
            }
        }

        public function insereTelefone(){

        }

    }

?>