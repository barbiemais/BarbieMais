<?php
//Verifica o acesso.
require 'acessoadm.php';

  //Este é o cadastro do usuário ou mudança de senha
  // Senha lida do formulário
  $text = $_POST["senha"];
  $camponome = $_POST["nome"];
$campoemail = $_POST["email"];
$campoacesso = $_POST["acesso"];
$hash = password_hash($text, PASSWORD_BCRYPT);

  include 'conexao.php';

  $sql = "INSERT INTO usuarios(nome, email, senha, acesso) VALUES('$camponome' , '$campoemail', '$hash', '$campoacesso')";

if ($conn->query($sql) === TRUE) {
 echo "Gravado com sucesso.";
}
  
 
 ?>
 
 <?php
 
  $sql = "SELECT * FROM usuarios where email='z'";

//Executa o SQL
$result = $conn->query($sql);

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
  
    // Verifica se o hash lido do bd corresponde a senha digitada no form
  $resultado = password_verify($text, $row["Senha"]);
  

  echo $hash;
  echo "<br>" . $row["Senha"]; 
  if ($hash == $row["Senha"]) {
      echo '<br><br>Senha Ok!';
  } else {
      echo '<br><br>Senha Errada!';
  }
  
  
?>