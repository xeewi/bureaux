<?php
if(isset($_SESSION['user'])){
    if(isset($_GET["company"])){
        if(isset($_POST["so_company_name"])){//verif if form is submitted
            if(!empty($_POST["so_company_name"]) && !empty($_POST["so_company_email"])){//verif if form is valid

                include_once('model/admin/edit_company.php');
                $edit_company = edit_company($_GET["company"]);

                if($edit_company){//test update the project
                    $_SESSION['flash']['success'] = 'La modification de l\'entreprise a été effectué avec succès !';
                    header("Location:?module=admin&action=companies");
                    exit();
                }
                else{
                    $_SESSION['flash']['danger'] = 'La modification a échoué !';
                    header("Location:?module=admin&action=edit-company&company=". $_GET["company"]);
                    exit();
                }
            }
            else{
                $_SESSION['flash']['danger'] = 'Certains champs sont incorrects. Veuillez réessayer';
                header("Location:?module=admin&action=edit-company&company=". $_GET["company"]);
                exit();
            }
        }
        else{
            include_once('model/admin/select_company.php');
            $current_company = select_company($_GET['company']);
            if(!$current_company){
                $_SESSION['flash']['warning'] = 'La page ne s\est pas chargée correctement. Si l\'erreur persiste, vérifiez que vous avez bien ajouté des villes et régions';
                header("Location:?module=admin&action=companies");
                exit();
            }else{
                include_once('view/admin/edit-company.php');
            }
        }
    }
    else{
        header("Location:?module=admin&action=companies");
        exit();
    }
}
else{
    $_SESSION['flash']['danger'] = 'Vous devez vous connecter pour accéder à cette partie du site';
    header("Location:?module=admin&action=login");
    exit();
}
