<?php
    if(!defined("_BASE_URL")) die("Vous ne pouvez pas accéder à cette partie du site !");

    if(isset($_SESSION['user'])){
        include_once('model/admin/count_companies.php');
        $count_companies = count_companies();

        include_once('model/admin/select_companies.php');
        $companies = select_companies();

        if(!$companies){
            $_SESSION['flash']['warning'] = "Vous n'avez aucune entreprise partenaire pour l'instant.";
            header('Location: ?module=admin&action=index');
            exit();
        }
        else{
            include_once('view/admin/companies.php');
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }