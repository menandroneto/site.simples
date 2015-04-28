<?php

function conexaoDB(){
	try {
		$configdb = include "config.php";
		
		if (!isset($configdb['db'])){
			throw new \InvalidArgumentException("Paramertos de banco de dados indefinidos.");
			
		}
		
		$host     = (isset($configdb['db']['host']))    ? $configdb['db']['host']    : null;
		$dbname   = (isset($configdb['db']['dbname']))  ? $configdb['db']['dbname']  : null;
		$user     = (isset($configdb['db']['user']))    ? $configdb['db']['user']    : null;
		$password = (isset($configdb['db']['password']))? $configdb['db']['password']: null;
		
		return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
		
	}
	catch (\PDOException $e){
		echo $e->getMessage() . "\n";
		echo $e->getTraceAsString() . "\n";
	}
}


// $teste = include "config.php";
// print_r($teste);

// $conn = conexaoDB();
// print_r($conn);
?>