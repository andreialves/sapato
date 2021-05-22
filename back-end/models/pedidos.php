<?php
    include('../db.php');
    include('endereco.php');
    include('cliente.php');

    class Pedidos {
        private $idPedido;
        private $data;
        private $tipoEmbalagem;
        private $cliente;
        private $endereco;
        private $listaCalcado;

        public function __construct() {
            $this->cliente = new Cliente();
            $this->endereco = new Endereco();
            $this->listaCalcado = array();
        }

        public function getIdPedido(){
            return $this->idPedido;
        }
        
        public function getData(){
            return $this->data;
        }

        public function getTipoEmbalagem(){
            return $this->tipoEmbalagem;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function getListaCalcado(){
            return $this->listaCalcado;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function setTipoEmbalagem($tipoEmbalagem){
            $this->tipoEmbalagem = $tipoEmbalagem;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function setListaCalcado($listaCalcado){
            $this->listaCalcado = $listaCalcado;
        }
        
        public function setCalcado($calcado){
            array_push($this->listaCalcado, $calcado);
        }

        public function obterValorTotal(){
            $soma_compra = 0.0;
            foreach($this->listaCalcado as $calcado){
                $soma_compra .= $calcado->getModelo()->getValor();
            }
            return $soma_compra;
        }

    }

?>
