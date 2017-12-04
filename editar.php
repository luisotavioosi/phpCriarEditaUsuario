<!DOCTYPE html>
<html>
<head>
	<title>Atualizar dados</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		
	</style>
</head>
<body>
	<head>
		<div>		
			<div class="span">
				<h1>Atualização dos dados</h1>
			</div>
		</div>

	</head>
	<?php 
	include_once ('conn.php');
		
			$id = $_GET['id'];
			$sql = "SELECT * FROM usuario where id = '$id'";
			$sql = $conn->prepare($sql);
			$sql->execute();
			$row = $sql->fetch();

	?>
	<div>
		<div>
			<form method="post" action="salvar.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 
			Nome: <input type="nome" name="nome" value="<?php echo $row['nome']; ?>" required ><br /><br />
			E-mail: <input type="email" name="email" placeholder="exemple@exemple.com"  value="<?php echo $row['email']; ?>" required><br /><br />
			Senha: <input type="password" name="senha" placeholder="**********" required value="<?php echo $row['senha']; ?>"> <br /> <br />
			Masculino <input type="radio" name="sexo"  value="Masculino" <?php if ($row['sexo'] == "Masculino"){echo "checked";} ?>> 
			Feminino <input type="radio" name="sexo" value="Feminino" <?php if ($row['sexo'] == "Feminino"){echo "checked";} ?>> <br /><br />

			Cidade: <select name=cidade>
						<option value="0">Escolha uma opção</option>
						<option value="Parnaiba"  <?php if ($row['cidade'] == "Parnaiba"){echo "selected='selected'";} ?>> Parnaíba</option>
						<option value="Teresina" <?php if ($row['cidade'] == "Teresina"){echo "selected='selected'";} ?>> Teresina</option>
						<option value="Picos" <?php if ($row['cidade'] == "Picos"){echo "selected='selected'";} ?>> Picos</option>
						<option value="Piracuruca" <?php if ($row['cidade'] == "Piracuruca"){echo "selected='selected'";} ?>> Piracuruca</option>
					</select><br /> <br />

			Deficiência <input type="checkbox"  <?php if ($row['temDeficiencia'] == "Sim"){echo "checked";} ?> name="temDeficiencia" value="Sim"><br>
						
			<input type="submit" value="Salvar">
			</form>
		</div>
	</div>
</body>
</html>