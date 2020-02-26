<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de notícias</title>
	<link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/style.css">
</head>
<body>

	<header>
		<div class="title">
			<h3>Notícias</h3>
		</div>
		<div class="options">
			<ul>
				<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
				<li><a href="<?php echo BASE_URL; ?>esportes">Esportes</a></li>
				<li><a href="<?php echo BASE_URL; ?>economia">Economia</a></li>
				<li><a href="<?php echo BASE_URL; ?>tecnologia">Tecnologia</a></li>
				<li><a href="<?php echo BASE_URL; ?>eventos">Eventos</a></li>
			</ul>
		</div>
	</header>

	<div class="view-selected">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>