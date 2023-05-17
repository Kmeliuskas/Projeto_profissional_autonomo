<!DOCTYPE html>
<html lang="pt-Br">

<?php include 'protect.php'; ?>

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

					<h1 class="h3 mb-3">Página de Anotações</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Escreva o que desejar para ficar anotado!</h5>
								</div>
								<div class="card-body">
									<div class="form-floating">
										<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px"></textarea>
										<label for="floatingTextarea2">Sua Anotação</label>
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