<?php
    if(!defined("_BASE_URL")) die("Vous ne pouvez pas accéder à cette partie du site !");

    if(isset($_SESSION['user'])){
        include_once('model/admin/count_contacts.php');
        $count_contacts = count_contacts();

        include_once('model/admin/select_contacts.php');
        $contacts = select_contacts();

        if(!$contacts){
            $_SESSION['flash']['warning'] = "Vous n'avez aucun contact pour l'instant.";
            header('Location: ?module=admin&action=index');
            exit();
        }
        else{
            include_once('view/admin/contacts.php');
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }