<?php
    if(isset($_SESSION['user'])){
        if(isset($_GET["lead"])){
            include_once('model/admin/select_lead.php');
            $current_lead = select_lead($_GET['lead']);

            if($current_lead){
                if($current_lead["so_lead_status_id"] == 1){
                    include_once('model/admin/select_companies.php');
                    $companies = select_companies();
                    if(!$companies){
                        $_SESSION['flash']['danger'] = 'Problème d\'affichage. Si le problème persiste, vérifiez que vous avez bien ajouté au moins une entreprise partenaire.';
                        header("Location:?module=admin&action=all-leads");
                        exit();
                    }
                } else if ($current_lead['so_lead_status_id'] == 2 && isset($_GET['close']) && $_GET['close'] == "ok"){
                    require_once('model/admin/update_lead_status.php');
                    update_lead_status($_GET['lead']);
                    header('Location: ?module=admin&action=all-leads');
                    exit();
                } 
                include_once('view/admin/lead.php');
            }
            else{
                $_SESSION['flash']['danger'] = 'L\'affichage a échoué !';
                header("Location:?module=admin&action=index");
                exit();
            }
        }
        else{
            header("Location:?module=admin&action=index");
            exit();
        }
    }
    else{
        $_SESSION['flash']['danger'] = 'Vous devez vous identifier pour accéder à cette partie du site.';
        header("Location:?module=admin&action=login");
        exit();
    }

