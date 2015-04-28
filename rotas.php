<?php

function VerificaRota(){
	$rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	$path = str_replace('/', '', $rota['path']);
	//print_r($rota);
	//echo $path;
	$fileName = '';
	
	if ($path == '') 
		$fileName = 'index.php';
	
	if (strpos($path, '.php') === false)
		$fileName = $path . '.php';
	else
		$fileName = $path;
	//echo $fileName;
	if (($path <> '') and (!file_exists($fileName))) {
		http_response_code(404);
		require_once('404.php');
		exit();
	}
}

?>
