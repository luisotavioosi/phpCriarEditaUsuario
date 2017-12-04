<?php
	include_once("conn.php");	
			$id = $_POST['id'];		
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
			
			$d = $conn->prepare("UPDATE usuario SET nome='$nome', email='$email', senha='$senha', sexo='$sexo', cidade='$cidade', temDeficiencia='$deficiente' WHERE id='$id'");
			$d->execute();
			header("Location: listar.php?message='Erro'");

		}
		
header("Location: listar.php");
		
?>