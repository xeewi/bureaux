<?php
    if(isset($_SESSION['user'])){
        if(isset($_GET["page"])){
            if(isset($_POST["so_page_title"])){//verif if form is submitted
                if(!empty($_POST["so_page_title"]) && !empty($_POST["so_page_content"]) && !empty($_POST["so_page_meta_descr"]) && !empty($_POST["so_page_img_url"]) && !empty($_POST["so_page_city_id"])){//verif if form is valid

                    include_once('model/admin/edit_page.php');
                    $edit_page = edit_page($_GET["page"]);

                    if($edit_page){//test update the project
                        $_SESSION['flash']['success'] = 'La modification de la page a été effectué avec succès !';
                        header("Location:?module=admin&action=pages");
                        exit();
                    }
                    else{
                        $_SESSION['flash']['danger'] = 'La modification a échoué !';
                        header("Location:?module=admin&action=edit-page&page=".$_GET["page"]);
                        exit();
                    }
                }
                else{
                    $_SESSION['flash']['danger'] = 'Certains champs sont incorrects. Veuillez réessayer';
                    header("Location:?module=admin&action=edit-page&page=".$_GET["page"]);
                    exit();
                }
            }
            else{
                include_once('model/admin/select_cities.php');
                include_once('model/admin/select_page.php');
                $all_cities = select_cities();
                $edit_page = select_page($_GET['page']);
                if(!$all_cities || !$edit_page){
                    $_SESSION['flash']['warning'] = 'La page ne s\est pas chargée correctement. Si l\'erreur persiste, vérifiez que vous avez bien ajouté des villes et régions';
                    header("Location:?module=admin&action=pages");
                    exit();
                }else{
                    include_once('view/admin/edit-page.php');
                }
            }
        }
        else{
            header("Location:?module=admin&action=pages");
            exit();
        }
    }
    else{
        $_SESSION['flash']['danger'] = 'Vous devez vous connecter pour accéder à cette partie du site';
        header("Location:?module=admin&action=login");
        exit();
    }
