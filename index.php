<?php
	define('_BASE_URL', "");
	
	include_once('config/param.inc.php');
	include_once('core/core.inc.php');

	if (!secu_session_start(SESSION_NAME)) {
		die("Problème session !");
	}

	include_once('model/bd.inc.php');

	// Appel du controleur du module demandé
	if (!isset($_GET['module'])) {
		$bt_module = 'home';
	} else{
		$bt_module = $_GET['module'];
	}

	if (!isset($_GET['action'])) {
		$bt_action = 'index';
	} else {
		$bt_action = $_GET['action'];
	}

	$_SESSION["module"] = $bt_module;
	$_SESSION["action"] = $bt_action;

	$bt_url = 'controller/'.$bt_module.'/'.$bt_action.'.php';

	if (file_exists($bt_url)) {
		include_once($bt_url);
	} else{
		//Pas de module trouvé, erreur 404
		include_once('view/404.php');
	}