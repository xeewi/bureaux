<?php
    if(isset($_SESSION["user"])){
        if(isset($_POST["so_company_id"])){
            include_once('model/admin/delete_company.php');
            $delete_company = delete_company($_POST["so_company_id"]);
            if($delete_company){
                $_SESSION['flash']['success'] = 'L\'entreprise a bien été supprimé.';
                header("location: index.php?module=admin&action=companies");
                exit();
            }
            else{
                $_SESSION['flash']['danger'] = 'Nous n\'avons pas pu supprimer l\'entreprise. Veuillez réessayer !';
                header("location: index.php?module=admin&action=companies");
                exit();
            }
        }
        else{
            $_SESSION['flash']['danger'] = 'Nous n\'avons pas pu supprimer l\'entreprise. Veuillez réessayer !';
            header("location: index.php?module=admin&action=companies");
            exit();
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }