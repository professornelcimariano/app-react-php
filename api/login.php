<?php 

include_once('conexao.php');

$postjson = json_decode(file_get_contents("php://input"), true);

 
 $query_buscar = $pdo->query("SELECT * from usuarios where email = '$postjson[email]' and senha = '$postjson[senha]' ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
 if(@count($dados_buscar) == 0){
 	 $result = json_encode(array('success'=>'Dados Incorretos!'));
 	 echo $result;
 	 
  }

 
     


?>