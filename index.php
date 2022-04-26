<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Alpha Virginis &middot; Supernova</title>

	<!-- jQuery -->
	<script src="js/jquery-3.6.0.js"></script>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Implementação do CSS -->
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container-fluid">

			<a class="navbar-brand" href="#">Alpha Virginis</a>

			<div class="collapse navbar-collapse" id="dropdown">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item dropdown">
						<a class="nav-link tasks posicao active dropdown-toggle on" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Tarefas</a>
						<ul class="dropdown-menu mx-0 shadow" style="width: 12vw;">
							<li>
								<a href="#" class="dropdown-item ativo d-flex gap-2 align-items-center">
									<img class="bi ico-navbar"src="img/ico/tasks.png">
									Consultar
								</a>
							</li>
							<li>
								<a href="includes/register.php" class="dropdown-item d-flex gap-2 align-items-center">
									<img class="bi ico-navbar"src="img/ico/register.png">
									Cadastrar
								</a>
							</li>
							<li>
								<a href="includes/concludes.php" class="dropdown-item d-flex gap-2 align-items-center">
									<img class="bi ico-navbar" src="img/ico/finished.png">
									Concluídas
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link posicao active" href="includes/about.html">Sobre</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<h1 style="text-align: center">&middot; Alpha Virginis &middot;</h1>
	<br>

	<?php include('php/connect.php');

		// Executa consultas simples ao banco de dados
		$requisicao =  "SELECT *
						FROM tb_requisicao, tb_requerente
						WHERE tb_requisicao.cd_requisicao = tb_requerente.cd_requerente";
		$result = $mysqli->query($requisicao);

	?>

	<div class="box">
		<p class="subtitulo">Consulta de requisições pendentes</p>
		<hr><br>
		<a href="includes/register.php">
			<img class="ico" src="img/ico/add.png">
			<span id="insert">Cadastrar requisição</span>
		</a>

		<br><hr><br>

		<?php 

			// Exibe os registros existentes na tabela a partir da estrutura criada
			while ($row = $result -> fetch_object()) {
				echo "
					<fieldset class='requisition'>
						<!-- Ativa pré slideDown() no jQuery -->

						<div id='open' class='open'>
							<img id='slide'>

							<div id='nameRequisition'><p>$row->nm_req</p></div>

							<div id='petitioner'>
								<p>Por: <span id='pet'>$row->nm_requerente</span>
					 			&middot; <span id='office'>$row->ds_cargo</span></p>
							</div>

							<div id='date'><p>Para: <span id='dt'>$row->dt_data</span></p></div>
						</div>

						<!-- Ativa pós slideDown() no jQuery -->

						<div id=full-'requisition' class='none'>
							<div class='center'>
								<img id='setor' src='img/sector/dimorie.png'>

								<p id='nomeSetor'>[Nome do setor]</p>

								<br><p id='descReq'>$row->ds_descricao</p><br><br>

								<div class='ico-box' style='display: inline;'>
									<a href='includes/alter-form.php?requisicao=$row->cd_requisicao'><img src='img/ico/upd.png' id='upd-ico' class='ico'></a>
									<a href='../php/delete.php?requisicao=$row->cd_requisicao'><img src='img/ico/del.png' id='del-ico' class='ico'></a>
									<a href='../php/conclude.php?requisicao=$row->cd_requisicao'><img src='img/ico/conc.png' id='conc-ico' class='ico'></a>
								</div>
							</div>
						</div>
					</fieldset>
				";
			}

		?>

		

		<br><hr><br>


	 	<a href="includes/register.php">
			<img class="ico" src="img/ico/add.png">
			<span id="insert">Cadastrar requisição</span>
		</a>
		<br>
	</div>
	<br>
	<footer>
 		<p>&copy; 2022 &middot; Grêmio Estudantil Supernova &middot; Alpha Virginis</p>
 	</footer>

 	<script src="js/nav-tasks-dropdown.js"></script>
 	<script src="js/full-requisition.js"></script>
</body>
</html>