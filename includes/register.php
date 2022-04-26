<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar Requisição &middot; AV</title>

	<!-- jQuery -->
	<script src="../js/jquery-3.6.0.js"></script>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../img/favicon/site.webmanifest">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Implementação do CSS -->
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container-fluid">

			<a class="navbar-brand" href="../index.php">Alpha Virginis</a>

			<div class="collapse navbar-collapse" id="dropdown">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item dropdown">
						<a class="nav-link posicao tasks active dropdown-toggle on" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Tarefas</a>
						<ul class="dropdown-menu mx-0 shadow" style="width: 12vw;">
							<li>
								<a href="../index.php" class="dropdown-item d-flex gap-2 align-items-center">
									<img class="bi ico-navbar"src="../img/ico/tasks.png">
									Consultar
								</a>
							</li>
							<li>
								<a href="#" class="dropdown-item d-flex ativo gap-2 align-items-center">
									<img class="bi ico-navbar"src="../img/ico/register.png">
									Cadastrar
								</a>
							</li>
							<li>
								<a href="concludes.php" class="dropdown-item d-flex gap-2 align-items-center">
									<img class="bi ico-navbar" src="../img/ico/finished.png">
									Concluídas
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link posicao active" href="about.html">Sobre</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<h1 style="text-align: center">&middot; Alpha Virginis &middot;</h1>
	<br>
	<div class="box">
		<p class="subtitulo">Formulário de cadastro de requisições</p>
		<hr><br>

		<?php include('../php/connect.php');

			$consulta = "SELECT * FROM tb_requisicao";

			if ($result = $mysqli->query($consulta)) {
				?>

				<form action="../php/insert.php" method="post" id="form">
					<fieldset class="cad">
						<div class="name">
							<input type="text" name="name" placeholder="Nome da requisição" required>
						</div>

						<div class="description">
							<textarea id="desc" maxlength="500" placeholder="Descreva brevemente a requisição a seguir"
							rows="10" name="descricao"></textarea>
						</div>

						<div style="display: inline;" class="matriz">
							<select name="urg" id="urg" required>
								<option disabled selected>É urgente?</option>

								<option value="1">Sim</option>
								<option value="2">Não</option>
							</select>

							<select name="imp" id="imp" required>
								<option disabled selected>É importante?</option>

								<option value="1">Sim</option>
								<option value="2">Não</option>
							</select>
						</div>

						<div class="prazo-setor">
							<input type="date" name="prazo" required placeholder="Prazo limite">

							<select name="sector" id="sector" required>
								<option disabled selected>Setor responsável</option>

								<option value="1">Presidência</option>
								<option value="2">Secretaria</option>
								<option value="3">Tesouraria</option>
								<option value="4">Imprensa</option>
								<option value="5">Cultura</option>
								<option value="6">Esportes</option>
							</select>
						</div>

						<div class="requerente">
							<select name="requerente" id="requerente" required>
								<option disabled selected>Quem é o requerente?</option>

								<option>Haraldo</option>
							</select>
						</div>
					</fieldset>
					<br>
					<div class="end" style="display: inline;">
						<input type="submit" name="enviar" value="Enviar">
						<input type="reset" name="limpar" value="Limpar">
						<button id="cancelar"><a href="javascript:history.go(-1)">Cancelar</a></button>
					</div>

				</form>

				<?php
			}

		?>
	</div>
	<br>
	<footer>
 		<p>&copy; 2022 &middot; Grêmio Estudantil Supernova &middot; Alpha Virginis</p>
 	</footer>

 	<script src="../js/nav-tasks-dropdown.js"></script>
</body>
</html>