<?php
include("conecta.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenha os valores das caixas de seleção do POST
  $opcao1 = isset($_POST["opcao1"]) ? "falar": "?"; // 1 para selecionado, 0 para não selecionado
  $opcao2 = isset($_POST["opcao2"]) ? "não falar" : "?";

  
  

  // Crie uma consulta SQL para inserir os valores na tabela (substitua "sua_tabela" pelo nome da sua tabela)
 
  $comando = $pdo->prepare("INSERT INTO tipo_ocorrencia (opcao1, opcao2) VALUES (:op1, :op2)");
  $comando->bindParam(":op1", $opcao1);
  $comando->bindParam(":op2", $opcao2);

  if ($comando->execute()) {
    echo "Dados inseridos com sucesso na tabela.";
  } else {
    echo "Erro ao inserir dados na tabela: " . $comando->error;
  }

}
?>