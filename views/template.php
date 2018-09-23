<html>
	<head>
		<title>Título do Site</title>
		<script type="text/javascript" src=""></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css">
	</head>
	<body>
		<h1>Topo do Site</h1>
		<br/>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		<br/>
		<h4>Rodapé do Site</h4>
	</body>
</html>