<?php
	include_once('conn.php');

	$id = $_GET['id'];
	$s = $conn->prepare("DELETE FROM usuario WHERE id = '$id'");
	$s->execute();
	header("Location: listar.php");
?>