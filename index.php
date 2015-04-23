<?php 
	require_once("rotas.php");
	VerificaRota();
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>
			Título
		</title>
		<meta charset="UTF-8"/>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php 
			require_once("menu.php"); 
		?>

		<?php
			if(!isset($_GET['page']))
				require_once("home.php");
			else 
			{
				$FileName = $_GET['page'].".php";
				if (!file_exists($FileName))
					$FileName = 'home.php';
				require_once($FileName);
			}
		?>
		
		<?php require_once("rodape.php"); ?>

	</body>

</html>