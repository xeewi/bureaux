<?php
    if(isset($_SESSION["user"])){
        if(isset($_POST["so_page_id"])){
            include_once('model/admin/delete_page.php');
            $delete_page = delete_page($_POST["so_page_id"]);
            if($delete_page){
                $_SESSION['flash']['success'] = 'La page a bien été supprimé.';
                header("location: index.php?module=admin&action=pages");
                exit();
            }
            else{
                $_SESSION['flash']['danger'] = 'Nous n\'avons pas pu supprimer la page. Veuillez réessayer !';
                header("location: index.php?module=admin&action=pages");
                exit();
            }
        }
        else{
            $_SESSION['flash']['danger'] = 'Nous n\'avons pas pu supprimer la page. Veuillez réessayer !';
            header("location: index.php?module=admin&action=pages");
            exit();
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }