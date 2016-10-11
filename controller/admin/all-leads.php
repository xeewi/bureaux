<?php
    if(!defined("_BASE_URL")) die("Pirate reconnu !");

    if(isset($_SESSION['user'])){
        if (isset($_GET['stat']) && $_GET['stat'] == 1) {
            // COUNT NEW LEADS

            include_once('model/admin/count_new_leads.php');
            $count_new_leads = count_new_leads();

            include_once('model/admin/select_new_leads.php');
            $leads = select_new_leads();

            if(!$leads){
                $_SESSION['flash']['warning'] = "Vous n'avez aucun nouveau lead pour l'instant.";
                header('Location: ?module=admin&action=index');
                exit();
            } else {
                include_once('view/admin/all-leads.php');
            }

        } else if (isset($_GET['stat']) && $_GET['stat'] == 2) {
            // COUNT PENDING LEADS

            include_once('model/admin/count_pending_leads.php');
            $count_pending_leads = count_pending_leads();

            include_once('model/admin/select_pending_leads.php');
            $leads = select_pending_leads();

            if(!$leads){
                $_SESSION['flash']['warning'] = "Vous n'avez aucun lead en attente pour l'instant.";
                header('Location: ?module=admin&action=index');
                exit();
            } else {
                include_once('view/admin/all-leads.php');
            }

        } else if (isset($_GET['stat']) && $_GET['stat'] == 3) {
            // COUNT CLOSED LEADS

            include_once('model/admin/count_closed_leads.php');
            $count_closed_leads = count_closed_leads();

            include_once('model/admin/select_closed_leads.php');
            $leads = select_closed_leads();

            if(!$leads){
                $_SESSION['flash']['warning'] = "Vous n'avez aucun lead fermé pour l'instant.";
                header('Location: ?module=admin&action=index');
                exit();
            } else {
                include_once('view/admin/all-leads.php');
            }

        } else {
            // COUNT ALL LEADS

            include_once('model/admin/count_all_leads.php');
            $count_all_leads = count_all_leads();

            include_once('model/admin/select_all_leads.php');
            $leads = select_all_leads();

            if(!$leads){
                $_SESSION['flash']['warning'] = "Vous n'avez aucun lead pour l'instant.";
                header('Location: ?module=admin&action=index');
                exit();
            }
            include_once('view/admin/all-leads.php');
        }
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }