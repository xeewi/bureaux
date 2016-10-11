<?php
    if(isset($_SESSION['user'])){
        if(isset($_POST["so_page_title"])){//verif if form is submitted
            if(!empty($_POST["so_page_title"]) && !empty($_POST["so_page_content"]) && !empty($_POST["so_page_meta_descr"]) && !empty($_POST["so_page_img_url"]) && !empty($_POST["so_page_city_id"])){//verif if form is valid

                include_once('model/admin/add_page.php');
                $add_page = add_page();

                if($add_page){//test insert the project
                    $_SESSION['flash']['success'] = 'L\'ajout de la page a été effectué avec succès !';
                    header("Location:?module=admin&action=pages");
                    exit();
                }
                else{
                    $_SESSION['flash']['danger'] = 'L\'ajout a échoué !';
                    header("Location:?module=admin&action=add-page");
                    exit();
                }
            }
            else{
                $_SESSION['flash']['danger'] = 'Certains champs sont incorrects. Veuillez réessayer';
                header("Location:?module=admin&action=add-page");
                exit();
            }
        }
        else{
            include_once('model/admin/select_cities.php');
            $all_cities = select_cities();
            if(!$all_cities){
                $_SESSION['flash']['warning'] = 'La page ne s\est pas chargée correctement. Si l\'erreur persiste, vérifiez que vous avez bien ajouté des villes et régions';
                header("Location:?module=admin&action=index");
                exit();
            }else{
                include_once('view/admin/add-page.php');
            }
        }
    }
    else{
        $_SESSION['flash']['danger'] = 'Vous devez vous connecter pour accéder à cette partie du site';
        header("Location:?module=admin&action=login");
        exit();
    }
