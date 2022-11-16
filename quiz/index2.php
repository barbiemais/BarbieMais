<!DOCTYPE html>
<html>
<head>
	<title>Quiz da Barbie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
	<link rel="stylesheet" type="text/css" href="quiz.css">
	<link rel="shortcut icon" type="imagex/png" a href="./css/favicon.ico">
</head>

<body>
<div class="container">
	<img class="logo" src="http://4.bp.blogspot.com/-elre9JZdrPA/UwAb8ZKRGXI/AAAAAAAAAI4/FhT9VaHJf4g/s1600/187.png" alt="Uma Barbie">
	<h1>Qual barbie você é?</h1>
	<div id="quiz"></div>
	
	<form action="respostafinal.php" method="post">
	<div class="formQuiz">
	<div class="formQuiz-question">
	<div class="formQuiz-radio">
	<div class="formQuiz-answer">
	<div class="formQuiz-submit">

<?php
session_start();

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT profile.id as numero, profile.pergunta, opcoes.id, opcoes.opcoes, opcoes.valor, opcoes.profile_id
FROM profile
JOIN opcoes ON profile.id = opcoes.profile_id order by profile.id";

//Faz a conexão com o BD.
require 'conexao.php';

//Executa o SQL
$result = $conn->query($sql);
 	
		$linha="";
	  while($row = $result->fetch_assoc()) {
		if ($linha != $row["numero"]) { 
			$linha=$row["numero"];
			echo "<br>" . $row["numero"] . " - " . $row["pergunta"] . "</br>";
		}
			echo "<br><input type='radio' name='q" .  $row["numero"] . "' value='" . $row["valor"] . "'>" . $row["opcoes"] . "</br>";
	  }	  

	  
	?>

	
	<input class="formQuiz-submit" type="submit" value="Responder">
				
	</div>
	</div>
	</div>
	</div>
	</div>
	</form>	

</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="./models.js"></script>



</body>
</html>
