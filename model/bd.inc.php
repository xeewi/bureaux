<?php
	try {
		$dns = 'mysql:host=localhost;dbname=sky_office;charset=utf8';
		$username = 'root';
		$password = '';
		$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

		$bdd = new PDO($dns, $username, $password, $options);
	}catch (Exception $e) {
		die("Connexion à MySQL impossible : " . $e->getMessage());
	}
