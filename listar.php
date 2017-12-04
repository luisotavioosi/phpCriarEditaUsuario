<!DOCTYPE html>
<html>
<head>
	<title>Estoque</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div>
			<div class="span">
				<h1>Lista de Usuários</h1>
			</div>
		</div>
	</header>
	<?php
		include_once('conn.php');
		$s = $conn->prepare("SELECT * FROM usuario");
		$s -> execute();
	?>
	<div>
		<div>
			<table>
				<thead>
					<tr class="span"> 
						<td><b>ID</b></td>
						<td><b>Nome</b></td>
						<td><b>Email</b></td>
						<td><b>Senha</b></td>
						<td><b>Sexo</b></td>
						<td><b>Cidade</b></td>
						<td><b>Deficiente</b></td>

					</tr>
				</thead>
				<tbody>
				<?php
					while ($row = $s->fetch()) {
						
				?>
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['nome'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['senha'] ?></td>
					<td><?= $row['sexo'] ?></td>
					<td><?= $row['cidade'] ?></td>
					<td><?= $row['temDeficiencia'] ?></td>

					<td> <a href="editar.php?id=<?= $row['id']?>">Editar</a></td>
					<td> <a href="apagar.php?id=<?= $row['id']?>">Deletar</a></td>
				</tr>

				<?php
					}
				?>
				</tbody>
			</table>
			<form action="index.html">
				<input type="submit" value="Criar Novo">
			</form>
		</div>
	</div>
</body>
</html>