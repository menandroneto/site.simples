	<nav role="navigation" class="navbar navbar-default">
	
		<div class="navbar-header">
			<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Navegação Responsiva</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Meu Site</a>
		</div>

		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
<?php
	require_once "conexao.php";
	$conn = conexaoDB();
	foreach ($conn->query('select * from menu') as $row) {
		echo "<li><a href='index.php?page=".$row['arquivo']."'>".$row['nmmenu']."</a></li>";
	}
/*
				<li><a href="/">Home</a></li>
				<li><a href="index.php?page=empresa">Empresa</a></li>
				<li><a href="index.php?page=produtos">Produtos</a></li>
				<li><a href="index.php?page=servicos">Serviços</a></li>
				<li><a href="index.php?page=contato">Contato</a></li>
*/
?>
			</ul>
		</div>

	</nav>	
