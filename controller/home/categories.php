<?php

require_once("model/home/search_page.php");
if (isset($_GET['ville'])) {
	$result = search_page($_GET["ville"]);

	if ($result) {
		include_once('view/home/categories.php');
	} else {
		$_SESSION['flash']['warning'] = 'Il n\'y a aucun résultat pour votre recherche.';
		header('Location: ?module=home');
		exit();
	}
} else {
		$_SESSION['flash']['warning'] = 'Il n\'y a aucun résultat pour votre recherche.';
		header('Location: ?module=home');
		exit();
}
