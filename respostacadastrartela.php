<html>
<head>
    
    
<title>Cadastro</title>
<meta charset="UTF-8">
  
  <link rel="stylesheet"  href="./css/telacadastro.css">

</head>

<?php
//Verifica o acesso.
require 'acessoadm.php';
?>

<body>
	<form action="respostacadastrarcodigo.php" method="post">
	    
	 <div class="login-wrap">
	<div class="login-html">  
	
	<label class="tab">Cadastrar Respostas</label>
	
	    <div class="login-form">

	<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Resposta</label>
					<input type="text" name="opcoes" placeholder="resposta..." required>
					
					<label for="value" class="label">Valor: </label>
					<input type="text" name="valor" placeholder="Valor..." required>
	
					
				    <input type="hidden" name="profile_id" value="<?php echo $_GET["pergunta"] ?>">
					<!--<input type="hidden" name="opcoes_id" value="<?php echo $_GET["opcoes"] ?>">-->
					
					<input type="submit" value="Ok">

</div>

				
				<div class="hr"></div>
			
</div>

	</form>
	</body>
</html>
