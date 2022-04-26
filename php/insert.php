<?php include('connect.php');

	$nome = $_POST['name'];
	$desc = $_POST['descricao'];
	$urgencia = $_POST['urg'];
	$importancia = $_POST['imp'];
	$prazo = $_POST['prazo'];
	$setor = $_POST['sector'];
	$requerente = $_POST['requerente'];

	$insert_urg = "INSERT INTO tb_urgencia (cd_urg, ds_urg) VALUES (null, '". $urgencia ."')";
	$insert_imp = "INSERT INTO tb_urgencia (cd_imp, ds_imp) VALUES (null, '". $importancia ."')";

	$insert_setor = "INSERT INTO tb_setor (cd_setor, nm_setor) VALUES (null, '". $setor ."')"; 

 ?>