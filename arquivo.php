<?php

$data = $_POST["data"];
$sexo = $_POST["sexo"];
$nome_hospital = $_POST["nome_hospital"];
$nomepac = $_POST["NOMEPAC"];
$idadepac = $_POST["IDADEPAC"];
$cpfpac = $_POST["CPFpac"];
$telefone = $_POST["telefone"];

include('conecta.php');

// Use prepared statements para evitar injeção de SQL
$comando = $pdo->prepare("INSERT INTO paciente(Data, Sexo, Nome_hospital, Nomepac, Idadepac, CPFpac, Telefone) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Associe os valores aos parâmetros da consulta
$comando->bindParam(1, $data);
$comando->bindParam(2, $sexo);
$comando->bindParam(3, $nome_hospital);
$comando->bindParam(4, $nomepac);
$comando->bindParam(5, $idadepac);
$comando->bindParam(6, $cpfpac);
$comando->bindParam(7, $telefone);

$resultado = $comando->execute();

if ($resultado) {
    $empregados = [
        [
            "aniversario" => $data,
            "sexo" => $sexo,
            "nome_hospital" => $nome_hospital,
            "NOMEPAC" => $nomepac,
            "IDADEPAC" => $idadepac,
            "CPFpac" => $cpfpac,
            "Telefone" => $telefone
        ]
    ];

} else {
    // Tratamento de erro, se necessário
}


?>