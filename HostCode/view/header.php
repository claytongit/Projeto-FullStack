<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Host Code</title>
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text|Raleway|Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<?php

		require_once './model/connection.php';
		$pdo = new connection('localhost', 'hostcode', 'root', '');

	?>