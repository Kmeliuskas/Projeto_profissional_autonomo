<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <?php include 'header.php'; ?>
</head>

<body>
	<div class="wrapper">
        <?php include 'menu.php'; ?>

		<div class="main">
            <?php include 'topo.php'; ?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Perfil</h1>
					</div>

					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Detalhes do Perfil</h5>
								</div>

								<div class="card-body text-center">
									<img src="img/avatars/avatar.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">Ricardo Milbrath</h5>
									<div class="text-muted mb-2">Gerente de desenvolvimento</div>

									<div>
										<a class="btn btn-primary btn-sm" href="#">Seguir</a>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Mensagem</a>
									</div>
								</div>

								<hr class="my-0" />

								<div class="card-body">
									<h5 class="h6 card-title">Habilidades</h5>
									<a href="#" class="badge bg-primary me-1 my-1">HTML</a>
									<a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
									<a href="#" class="badge bg-primary me-1 my-1">Sass</a>
									<a href="#" class="badge bg-primary me-1 my-1">Angular</a>
									<a href="#" class="badge bg-primary me-1 my-1">Vue</a>
									<a href="#" class="badge bg-primary me-1 my-1">React</a>
									<a href="#" class="badge bg-primary me-1 my-1">Redux</a>
									<a href="#" class="badge bg-primary me-1 my-1">UI</a>
									<a href="#" class="badge bg-primary me-1 my-1">UX</a>
								</div>

								<hr class="my-0" />

								<div class="card-body">
									<h5 class="h6 card-title">Sobre</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Mora em <a href="#">Caçador, SC</a></li>
										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Trabalha na empresa <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> De <a href="#">Italia</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Outros lugares</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">Twitter</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Atividades</h5>
								</div>
								<div class="card-body h-100">

									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
										<div class="flex-grow-1">
											<small class="float-end text-navy">5m atrás</small>
											<strong>Vanessa Tucker</strong> Começou a seguir <strong>Christina Mason</strong><br />
											<small class="text-muted">Hoje 18:30</small><br />

										</div>
									</div>

									<hr />

									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
										<div class="flex-grow-1">
											<small class="float-end text-navy">30m atrás</small>
											<strong>Charles Hall</strong> postou algo na linha do tempo de <strong>Christina Mason</strong><br />
											<small class="text-muted">Hoje 19:21</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Olá boa tarde
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Gostar</a>
										</div>
									</div>

									<hr />

									<div class="d-grid">
										<a href="#" class="btn btn-primary">Carregar Mais</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
                <?php include 'footer.php' ?>
            </footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>