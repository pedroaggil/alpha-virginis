<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tarefas Concluídas &middot; AV</title>

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
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container-fluid">

			<a class="navbar-brand" href="#">Alpha Virginis</a>

			<div class="collapse navbar-collapse" id="dropdown">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item dropdown">
						<a class="nav-link posicao active tasks dropdown-toggle on" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Tarefas</a>
						<ul class="dropdown-menu mx-0 shadow" style="width: 12vw;">
							<li>
								<a href="../index.php" class="dropdown-item d-flex gap-2 align-items-center">
									<img class="bi ico-navbar"src="../img/ico/tasks.png">
									Consultar
								</a>
							</li>
							<li>
								<a href="register.php" class="dropdown-item d-flex gap-2 align-items-center">
									<img class="bi ico-navbar"src="../img/ico/register.png">
									Cadastrar
								</a>
							</li>
							<li>
								<a href="#" class="dropdown-item ativo d-flex gap-2 align-items-center">
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
		<p class="subtitulo">Consulta de requisições concluídas</p>
		<hr><br>

		<fieldset class="requisition">
			<!-- Ativa pré slideDown() no jQuery -->

			<div id="open" class="open">
				<img id="slide">

				<div id="name-dateRequisition" style="display: inline;">
					<p>
						<span id="nameRequisition">Nome da Requisição</span>
						&middot;
						<span id="date"><span id="dt">[<span id="dd">dd</span> / <span id="mm">mm</span> / <span id="aa">aa</span>]</span></span>
					</p>
				</div>

				<div id="petitioner">
					<p>Por: <span id="pet">[Requerente]</span>
					 &middot; <span id="office">[Cargo]</span></p>
				</div>
			</div>

			<!-- Ativa pós slideDown() no jQuery -->

			<div id="full-requisition" class="none">
				<div class="center">
					<img id="setor" src="../img/sector/dimorie.png" alt="[Ícone do setor]"></img>

					<p id="nomeSetor">[Nome do setor]</p>

					<br><p id="descReq">[Breve descrição da requisição]</p><br><br>
				</div>
			</div>
		</fieldset>
		<br>
	</div>
	<br>
	<footer>
 		<p>&copy; 2022 &middot; Grêmio Estudantil Supernova &middot; Alpha Virginis</p>
 	</footer>

 	<script src="../js/nav-tasks-dropdown.js"></script>
	<script src="../js/full-conclude-req.js"></script>
</body>
</html>