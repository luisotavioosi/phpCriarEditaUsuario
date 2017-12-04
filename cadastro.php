<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<body>
	<head>
		<h1>Estoque</h1>
	</head>
	<?php
		include_once('conn.php');
		$nome = $_POST['nome'];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$sexo = $_POST["sexo"];
		$cidade = $_POST["cidade"];
		$deficiente = $_POST["temDeficiencia"];
		
		if($deficiente != "Sim"){
				$deficiente = "Nao";
			}
			
		if(!empty($nome) && !empty($email) && !empty($senha) && !empty($cidade)){

			$sql = $conn->prepare("INSERT INTO `usuario`(`nome`, `email`, `senha`, `sexo`, `cidade`, `temDeficiencia`) VALUES ('$nome','$email','$senha','$sexo', '$cidade','$deficiente')");
			$sql->execute();
			$sql = $conn->prepare("SELECT * FROM usuario");
			$sql->execute();

			header("Location: listar.php");
		}
		else{
			header("Location: listar.php");
			echo "Falha na comunicação";
		}
	?>
</body>
</html>