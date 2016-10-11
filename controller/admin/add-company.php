<?php
    if(isset($_SESSION['user'])){
        if(isset($_POST["so_company_name"])){//verif if form is submitted
            if(!empty($_POST["so_company_name"]) && !empty($_POST["so_company_email"]) && !empty($_POST["so_company_phone"])){//verif if form is valid

                include_once('model/admin/add_company.php');
                $add_company = add_company();

                if($add_company){//test insert the project
                    $_SESSION['flash']['success'] = 'L\'ajout de l\'entreprise a été effectué avec succès !';
                    header("Location:?module=admin&action=companies");
                    exit();
                }
                else{
                    $_SESSION['flash']['danger'] = 'L\'ajout de l\'entreprise a échoué !';
                    header("Location:?module=admin&action=add-company");
                    exit();
                }
            }
            else{
                $_SESSION['flash']['danger'] = 'Certains champs sont incorrects. Veuillez réessayer';
                header("Location:?module=admin&action=add-company");
                exit();
            }
        }
        else{
            include_once('view/admin/add-company.php');
        }
    }
    else{
        $_SESSION['flash']['danger'] = 'Vous devez vous connecter pour accéder à cette partie du site';
        header("Location:?module=admin&action=login");
        exit();
    }
