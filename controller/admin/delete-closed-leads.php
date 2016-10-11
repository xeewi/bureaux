<?php
    if(isset($_SESSION["user"])){
        require_once('model/admin/delete_closed_leads.php');
        $delete_closed_leads = delete_closed_leads();
        if($delete_closed_leads){
            $_SESSION['flash']['success'] = 'Les leads fermés ont bien été supprimé.';
            header("location: index.php?module=admin&action=all-leads");
            exit();
        }
        else{
            $_SESSION['flash']['danger'] = 'Nous n\'avons pas pu supprimer les leads fermés. Veuillez réessayer !';
            header("location: index.php?module=admin&action=all-leads&stat=3");
            exit();
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }