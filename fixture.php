<?php

require_once "conexao.php";

echo "## Executanto Fixture ##";
$conn = conexaoDB();

echo "Remove Tabela menu";
$conn->query('drop table if exists menu;');
echo "OK\n";

echo "Criar tabela de menu";
$conn->query("create table menu(
				id int not null auto_increment,
				nmmenu varchar(100) not null,
				arquivo varchar(100) not null,
				ativo varchar(1) not null,
				primary key (id) );");
echo "OK\n";

echo "Carga de dados";
$menu = array( 'Home'      => '/',
				'Empresa'  => 'empresa',
				'Produtos' => 'produtos',
				'Serviços' => 'servicos',
				'Contato'  => 'contato'
			  );

$insert = $conn->prepare("insert into menu(nmmenu, arquivo, ativo)"
						."values(:nmmenu, :arquivo, :ativo)");
foreach ($menu as $key => $value) {
	$insert->bindParam(':nmmenu', $key);
	$insert->bindParam(':arquivo', $value);
	$insert->bindValue(':ativo', 'S');
	$insert->execute();
}
echo "OK\n";
