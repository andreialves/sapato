<?php
   // header('Content-Type: application/json; charset:utf8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    
    include('../models/cliente.php');

    class Rest {
        public static function open($request){
            $url = explode('/', $request['url']);
            if ($url[0] == 'login'){
                
                $cliente = new Cliente();
                $cliente->setEmail($url[1]);
                $cliente->setSenha($url[2]);
                $usuario = array ("id" => $cliente->login());
                echo json_encode($usuario);
            }
            if ($url[0] == 'cadastro'){

            }
        }
        
    }

    if (isset($_REQUEST)){
        Rest::open($_REQUEST);
    }
?>