<?php
session_start(); 
//Verifica o acesso.
require 'acessoadm.php';
 
//Faz a leitura do dado passado pelo link.
$campoid = $_GET["id"];

//Faz a conexão com o BD.
require 'conexao.php';

// Apagar da tabela usuários o registro com o id
$sql = "DELETE FROM profile WHERE id= $campoid";

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
    header( "refresh:3;url=controlarperguntas.php" );	
  echo"Pergunta apagada";
  
    //header('Location: controlarperguntas.php'); //Redireciona para o controle
     
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
$conn->close();
?> 