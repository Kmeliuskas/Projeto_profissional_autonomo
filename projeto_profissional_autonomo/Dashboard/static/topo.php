<?php 
	include 'conexao.php';
?>

<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle js-sidebar-toggle">
		<i class="hamburger align-self-center"></i>
    </a>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
					<div class="position-relative">
						<i class="align-middle" data-feather="bell"></i>
						<span class="indicator">4</span>
					</div>
				</a>

				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
					<div class="dropdown-menu-header">
						4 Novas Notificações
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<i class="text-danger" data-feather="alert-circle"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Atualização completada</div>
									<div class="text-muted small mt-1">Reinicie o servidor 12 para concluir a atualização.</div>
									<div class="text-muted small mt-1">30m atrás</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<i class="text-warning" data-feather="bell"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Lembrete</div>
									<div class="text-muted small mt-1">Lembrete, alguem pediu um trabalho para você.</div>
									<div class="text-muted small mt-1">2h ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<i class="text-primary" data-feather="home"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Login de 192.168.0.164</div>
									<div class="text-muted small mt-1">5h atrás</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<i class="text-success" data-feather="user-plus"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Nova conexão</div>
									<div class="text-muted small mt-1">Christina aceitou sua solicitação de amizade.</div>
									<div class="text-muted small mt-1">14h atrás</div>
								</div>
							</div>
						</a>
					</div>

					<div class="dropdown-menu-footer">
						<a href="#" class="text-muted">Mostrar todas as notificações</a>
					</div>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
					<div class="position-relative">
						<i class="align-middle" data-feather="message-square"></i>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
					<div class="dropdown-menu-header">
						<div class="position-relative">
							4 Novas Mensagens
						</div>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
								</div>
								<div class="col-10 ps-2">
									<div class="text-dark">Vanessa Tucker</div>
									<div class="text-muted small mt-1">Como você está?</div>
									<div class="text-muted small mt-1">15m atrás</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
								</div>
								<div class="col-10 ps-2">
									<div class="text-dark">William Harris</div>
									<div class="text-muted small mt-1">Caramba cara que legal!</div>
									<div class="text-muted small mt-1">2h atrás</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
								</div>
								<div class="col-10 ps-2">
									<div class="text-dark">Christina Mason</div>
									<div class="text-muted small mt-1">Qual trabalho meu você gostou?</div>
									<div class="text-muted small mt-1">4h atrás</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
								</div>
								<div class="col-10 ps-2">
									<div class="text-dark">Sharon Lessman</div>
									<div class="text-muted small mt-1">Da uma olhada na minha página.</div>
									<div class="text-muted small mt-1">5h atrás</div>
								</div>
							</div>
						</a>
					</div>
					<div class="dropdown-menu-footer">
						<a href="#" class="text-muted">Mostrar todas as mensagens</a>
					</div>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
              	</a>
				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<span class="text-dark"> <?php ECHO $_SESSION['nome'] ?></span>
              	</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="perfil.php"><i class="align-middle me-1" data-feather="user"></i> Perfil</a>
					<a class="dropdown-item" href="analisar.php"><i class="align-middle me-1" data-feather="pie-chart"></i> Análisar</a>

					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Configurações e privacidade</a>
					<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Centro de ajuda</a>

					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="logout.php"><i class="align-middle me-1" data-feather="log-out"></i>Sair</a>
				</div>
			</li>

		</ul>
	</div>
</nav>