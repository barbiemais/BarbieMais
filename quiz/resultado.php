<?php
 
 //Faz a conexão com o BD.
require 'conexao.php';

//Pega na tabela os valores dos campos
$sql = "SELECT SUM(pergunta_1 + pergunta_2 + pergunta_3 + pergunta_4 + pergunta_5 + 
pergunta_6 + pergunta_7 + pergunta_8 + pergunta_9 + pergunta_10) as resultado FROM resposta WHERE usuario_id = $_SESSION[id]";

//Executa o SQL
$result = $conn->query($sql);

//Executa o SQL e faz tratamento de erros
if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
	$resultado = $row["resultado"];
	//echo $resultado;
	
	if ($resultado < 10 ){
		//include('butterfly.html');
		header( "url=butterfly.html" );
		//echo $tipo = "butterfly";
	} else {
	} if($resultado  > 11 && $resultado < 21 ){
		echo $tipo = "fashionista";	
		} else {
			
		} if($resultado >= 21 && $resultado < 30 ){
		echo $tipo = "mosqueteira";			
		} else {
			
		} if($resultado  >= 31 && $resultado < 41  ){
		echo $tipo = "popstar";	
		} else {
		} if($resultado  >= 41 && $resultado < 50 ){
		echo $tipo = "princesa";
		}

	
 } else {
 //header( "refresh:10;url=principal.php" );	
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    exit; // Interrompe o Script	
//Fecha a conexão.
$conn->close();
?>