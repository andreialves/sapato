<?php

    class Db {

        private $conexao;
        
        private $conf_conexao = 'host=localhost port=5432 dbname=sapatobd user=dbuser password=INF321@dmin';
    
        public function conecta() {
            $this->conexao = pg_connect($this->conf_conexao) or die("Erro de Conexão!");
            return $this->conexao;
        }

        public function desconecta() {
            if ($conexao){
                pg_close($conexao);
            }else {
                die ("Conexão não estabelecida!");
            }
        }

        public function __construct(){
            
        }
    }

?>