<?php
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		require_once('model/admin/select_page.php');
		$page = select_page($_GET['id']);

		require_once("model/home/search_page.php");
		$result = search_page($_GET["ville"]);

		if(isset($_POST['so_lead_firstname'])) {
			require_once('model/home/add_lead.php');
			$add = add_lead($_GET['id']);
			if($add){
				$_SESSION['flash']['success'] = 'Votre demande à bien été prise en compte.';
				header("Location:?module=home&region=". $_GET['region'] . "&ville=" . $_GET['ville'] . "&action=produit&id=" . $_GET['id']);
				exit();
			}
			else{
				$_SESSION['flash']['warning'] = 'Il y a eu un problème, réessayez svp.';
				header("Location:?module=home&region=". $_GET['region'] . "&ville=" . $_GET['ville'] . "&action=produit&id=" . $_GET['id']);
				exit;
			}
		} else {
			include_once('view/home/produit.php');
		}
	} else {
		header('Location: ?module=home');
		exit();
	}


