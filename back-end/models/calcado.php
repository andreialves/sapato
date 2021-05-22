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

    $calcadoNovo = new Calcado();
    

    $query = "SELECT * FROM ADMINISTRADOR;";

    $resultado = pg_query($calcadoNovo->getDB()->conecta(), $query);

    $nColunas = pg_fetch_all($resultado, PGSQL_ASSOC);

    foreach($nColunas as $value){
        echo $value['idadministrador']."<br>";
        echo $value['usuario']."<br>";
    }

?>