<?php

function secu_session_start($name = "") {
	session_name($name);
	session_start();

	// On récupère l'adresse IP du client, en prévoyant le cas du proxy
	$ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	
	// On fabrique une chaine avec l'IP et le type de navigateur
	$securite = $ip.'_'.$_SERVER['HTTP_USER_AGENT'];

	if (empty($_SESSION)) {	// Si il n'y a pas de session sécurisée en cours
		
		// On sécurise la session en enregistrant la chaine de sécurité
		$_SESSION['security'] = $securite;
		return true;

	}elseif ($_SESSION['security'] != $securite) { // Si il y a une session et que l'IP ou le navigateur diffèrent
		
		// On regenère la session et on efface tout le contenu
		session_regenerate_id();
		$_SESSION = array();
		return false;

	} else {

		return true;

	}
}