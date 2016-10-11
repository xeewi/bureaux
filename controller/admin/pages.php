<?php
    if(!defined("_BASE_URL")) die("Vous ne pouvez pas accéder à cette partie du site !");

    if(isset($_SESSION['user'])){
        include_once('model/admin/count_pages.php');
        $count_pages = count_pages();

        include_once('model/admin/select_pages.php');
        $pages = select_pages();

        if(!$pages){
            $_SESSION['flash']['warning'] = "Vous n'avez aucune page pour l'instant.";
            header('Location: ?module=admin&action=index');
            exit();
        }
        else{
            include_once('view/admin/pages.php');
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }