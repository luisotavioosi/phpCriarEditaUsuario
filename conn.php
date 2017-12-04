<?php

	try {
		
		$conn = new PDO('mysql:host=localhost;dbname=cadastro',"root","root");
	} catch (Exception $e) {
		echo "ERRORgtgt";
	}
?>