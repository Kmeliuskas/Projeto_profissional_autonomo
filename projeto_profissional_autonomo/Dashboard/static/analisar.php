<!DOCTYPE html>
<html lang="pt-Br">

<?php include 'protect.php' ?>

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
						<h1 class="h3 d-inline align-middle">Chart.js</h1>
					</div>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title">Linha Chart</h5>
									<h6 class="card-subtitle text-muted">Um gráfico de linhas é uma maneira de plotar pontos de dados em uma linha.</h6>
								</div>

								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-line"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Barras Chart</h5>
									<h6 class="card-subtitle text-muted">Um gráfico de barras fornece uma maneira de mostrar valores de dados representados como barras verticais.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-bar"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Rosquinha Chart</h5>
									<h6 class="card-subtitle text-muted">Os gráficos de rosca são excelentes para mostrar as proporções relacionais entre os dados.</h6>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-doughnut"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Pizza Chart</h5>
									<h6 class="card-subtitle text-muted">Os gráficos de pizza são excelentes para mostrar as proporções relacionais entre os dados.</h6>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-pie"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Radar Chart</h5>
									<h6 class="card-subtitle text-muted">Os gráficos de pizza são excelentes para mostrar as proporções relacionais entre os dados.</h6>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-radar"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Radar Chart</h5>
									<h6 class="card-subtitle text-muted">Os gráficos de pizza são excelentes para mostrar as proporções relacionais entre os dados.</h6>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-polar-area"></canvas>
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

	<script> //Gráfico de Linha Chart
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					datasets: [{
						label: "Vendas (R$)",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data: [2115, 1562, 1584, 1892, 1487, 2223, 2966, 2448, 2905, 3838, 2917, 3327]
					}, {
						label: "Ordens",
						fill: true,
						backgroundColor: "transparent",
						borderColor: "#adb5bd",
						borderDash: [4, 4],
						data: [958, 724, 629, 883, 915, 1214, 1476, 1212, 1554, 2128, 1466, 1827]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>

	<script> //Gráfico de barras chart
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					datasets: [{
						label: "Last year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}, {
						label: "This year",
						backgroundColor: "#dee2e6",
						borderColor: "#dee2e6",
						hoverBackgroundColor: "#dee2e6",
						hoverBorderColor: "#dee2e6",
						data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>

	<script> //Gráfico de rosquina chart
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-doughnut"), {
				type: "doughnut",
				data: {
					labels: ["Social", "Pesquisas", "Direct", "Outros"],
					datasets: [{
						data: [260, 125, 54, 146],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.warning,
							"#dee2e6"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					cutoutPercentage: 65,
					legend: {
						display: false
					}
				}
			});
		});
	</script>

	<script> //Gráfico de pizza chart
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-pie"), {
				type: "pie",
				data: {
					labels: ["Social", "Pesquisas", "Direct", "Outros"],
					datasets: [{
						data: [260, 125, 54, 146],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#dee2e6"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Radar chart
			new Chart(document.getElementById("chartjs-radar"), {
				type: "radar",
				data: {
					labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
					datasets: [{
						label: "Model X",
						backgroundColor: "rgba(0, 123, 255, 0.2)",
						borderColor: window.theme.primary,
						pointBackgroundColor: window.theme.primary,
						pointBorderColor: "#fff",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: window.theme.primary,
						data: [70, 53, 82, 60, 33]
					}, {
						label: "Model S",
						backgroundColor: "rgba(220, 53, 69, 0.2)",
						borderColor: window.theme.danger,
						pointBackgroundColor: window.theme.danger,
						pointBorderColor: "#fff",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: window.theme.danger,
						data: [35, 38, 65, 85, 84]
					}]
				},
				options: {
					maintainAspectRatio: false
				}
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Polar Area chart
			new Chart(document.getElementById("chartjs-polar-area"), {
				type: "polarArea",
				data: {
					labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
					datasets: [{
						label: "Model S",
						data: [35, 38, 65, 70, 24],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info
						]
					}]
				},
				options: {
					maintainAspectRatio: false
				}
			});
		});
	</script>

</body>

</html>