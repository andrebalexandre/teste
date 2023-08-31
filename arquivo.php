<?php

$data = $_POST["data"];    // Campos "name" inseridos no <form>
$sexo = $_POST["sexo"];
$nome_hospital = $_POST["nome_hospital"];
$nomepac = $_POST["NOMEPAC"];
$idadepac = $_POST["IDADEPAC"];
$cpfpac = $_POST["CPFpac"];
$telefone = $_POST["Telefone"];

include('conecta.php');
$comando = $pdo->prepare("INSERT INTO paciente( Data , Sexo, Nome_hospital, Nomepac, Idadepac, CPFpac, Telefone) Values( $data, $sexo, '$nome_hospital','$nomepac',$idadepac, $cpfpac, $telefone)");
$resultado = $comando->execute();

$empregados = [];  // Variável usada para guardar os dados acima no formato JSON.


// O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
// Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário
$resposta = 
      [
         "aniversario"  => $data,
         "sexo" => $sexo
         "nome_hospital" => $nome_hospital
         "NOMEPAC" => $nomepac
         "IDADEPAC" => $idadepac
         "CPFpac" => $cpfpac
         "Telefone" => $telefone
      ];

array_push($empregados, $resposta);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["empregados" => $empregados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>