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
                //echo json_encode($cliente->login());
            }
            if ($url[0] == 'cadastro'){
                $cliente = new Cliente();
                $cliente->setNome($url[1]);
                $cliente->setCpf($url[2]);
                $cliente->setSexo($url[3]);
                $cliente->setEmail($url[4]);
                $cliente->setSenha($url[5]);
                
                $endereco = new Endereco();
                $endereco->setRua($url[6]);
                $endereco->setCidade($url[7]);
                $endereco->setCep($url[8]);
                $endereco->setEstado($url[9]);
                $endereco->setNumero($url[10]);
                $endereco->setBairro($url[11]);
                $endereco->setComplemento($url[12]);
                $cliente->setEnderecoPrincipal($endereco);

                $cliente->insere();
                $cliente->insereEnderecoPrincipal();

                $telefone = new Telefone();
                $telefone->setTelefone($url[13]);
                $cliente->setTelefone($telefone);
                $telefone = new Telefone();
                $telefone->setTelefone($url[14]);
                $cliente->setTelefone($telefone);

                $cliente->insereTelefone();

                $usuario = array ("id" => "1");
                echo json_encode($usuario);
            }
        }
        
    }

    if (isset($_REQUEST)){
        Rest::open($_REQUEST);
    }
?>