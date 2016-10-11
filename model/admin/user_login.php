<?php
	if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function user_login($form){
		try{
			global $bdd;
			$query = $bdd->prepare("SELECT * from so_user
					WHERE so_user_email=:user_mail
						AND so_user_password=:user_password");

			$query->bindParam(':user_mail', $form["user_mail"], PDO::PARAM_STR);
			$query->bindParam(':user_password', $form["user_password"], PDO::PARAM_STR);
			$query->execute();
			$user = $query->fetch();
			return $user;
		}
		catch(Exception $e){
			$query->closeCursor();
			return false;
		}
	}