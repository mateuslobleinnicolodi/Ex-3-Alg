<!DOCTYPE html>
<html>
	<head>
	     <meta charset="UTF-8">
	     <title>Relatório</title>
	</head>

	<body>

	<h1>Dados coletados</h1>

	<?php
	
		if(isset($_GET["nome"]) == true){
			$nome = $_GET["nome"]; 
			echo "nome: " . $nome . "<br>"; 
		}
		
		if(isset($_GET["sexo"]) == true){
			$sexo = $_GET["sexo"];
			echo "sexo: " . $sexo . "<br>";
		}

		if(isset($_GET["cor"]) == true){
			$Cor = $_GET["cor"];			
			echo "cor olhos: " . $Cor . "<br>";
			
		}

		if(isset($_GET["textdef"]) == true){
			$textdef = $_GET["textdef"];
			echo "estado físico: " . $textdef . "<br>";
		}

		if(isset($_GET["gigante"]) == true){
			echo "tem mais de dois metros <br>";
		}else{
			echo "tem menos de dois metros <br>";}
			
		if(isset($_GET["peso"]) == true){
			echo "tem mais de 100kg  <br>";}
		else{
			echo "tem menos de 100kg <br>";}

	?>
	</body>
</html>


