<?php
include("conecta.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenha os valores das caixas de seleção do POST
  $opcao1 = isset($_POST["opcao1"]) ? 1 : 0; // 1 para selecionado, 0 para não selecionado
  $opcao2 = isset($_POST["opcao2"]) ? 1 : 0;

  // Depuração: verifique os valores das caixas de seleção
  var_dump($opcao1, $opcao2);

  // Crie uma consulta SQL para inserir os valores na tabela (substitua "sua_tabela" pelo nome da sua tabela)
  $sql = "INSERT INTO tipo_ocorrencia (opcao1, opcao2) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $opcao1, $opcao2);

  if ($stmt->execute()) {
    echo "Dados inseridos com sucesso na tabela.";
  } else {
    echo "Erro ao inserir dados na tabela: " . $stmt->error;
  }

  // Feche a conexão (se estiver usando uma conexão persistente, você pode omitir esta parte)
  $stmt->close();
}
?>