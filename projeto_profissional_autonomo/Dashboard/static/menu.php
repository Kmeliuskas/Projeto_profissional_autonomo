<script> //Função para adicionar a classe active referente aos links do menu
    // Função para definir o item ativo no menu
    function setActiveMenuItem() {
        // Obtém o URL da página atual
        var currentPageUrl = window.location.href;

        // Obtém todos os links do menu
        var menuLinks = document.querySelectorAll('.sidebar-link');

        // Percorre todos os links do menu
        for (var i = 0; i < menuLinks.length; i++) {
            var menuLink = menuLinks[i];
            var menuLinkUrl = menuLink.href;

            // Verifica se o URL do link corresponde ao URL da página atual
            if (currentPageUrl === menuLinkUrl) {
                // Adiciona a classe "active" ao item do menu correspondente
                menuLink.parentElement.classList.add('active');
                break;
            }
        }
    }

    // Chama a função ao carregar a página
    window.addEventListener('DOMContentLoaded', setActiveMenuItem);
</script>



<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="index.php">
			<span class="align-middle">Profissional Autônomo</span>
        </a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Menu
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="painel.php">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="formCliente.php">
              		<i class="align-middle" data-feather="user"></i> <span class="align-middle">Clientes</span>
            	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="perfil.php">
              		<i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
            	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="formProjeto.php">
              		<i class="align-middle" data-feather="user"></i> <span class="align-middle">Serviços</span>
            	</a>
			</li>

			<!-- <li class="sidebar-item">
				<a class="sidebar-link" href="pages-sign-in.html">
              	<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Login</span>
            	</a>
			</li> -->

			<!-- <li class="sidebar-item">
				<a class="sidebar-link" href="pages-sign-up.html">
              		<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Registrar</span>
            	</a>
			</li> -->

			<!-- <li class="sidebar-item">
				<a class="sidebar-link" href="pages-sign-up.html">
              		<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Reset Senha</span>
            	</a>
			</li> -->

			<li class="sidebar-item">
				<a class="sidebar-link" href="pagina_rascunho.php">
              		<i class="align-middle" data-feather="book"></i> <span class="align-middle">Anotações</span>
            	</a>
			</li>

			<!-- Divisor configurações -->
			<li class="sidebar-header">
				Configurações
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ui-buttons.html">
              		<i class="align-middle" data-feather="square"></i> <span class="align-middle">Boleto</span>
            	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ui-forms.html">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Pix</span>
            	</a>
			</li>

			<!-- Dividor Financeiro -->
			<li class="sidebar-header">
				Financeiro
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="analisar.php">
					<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Pagamentos à Receber</span>
            	</a>
			</li>

		</ul>
	</div>
</nav>