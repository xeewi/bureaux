<?php
    if(isset($_POST["so_page_title"])){
        require_once("model/home/search_page.php");
        $result = search_page($_POST["so_page_title"]);

        if(!$result){
            $_SESSION['flash']['warning'] = 'Nous n\'avons trouvé aucun résultat correspondant à votre recherche.';
            header("Location:?module=home&action=index");
            exit();
        }
        else{
            header("Location:?module=home&action=categories&recherche=".$_POST['so_page_title']."&region=". $result[0]["so_region_name"] . "&ville=" . $result[0]["so_city_name"]);
            exit();
        }
    }
    elseif(isset($_POST["so_contact_email"])){
        if(!empty($_POST["so_contact_email"]) && !empty($_POST["so_contact_name"]) && !empty($_POST["so_contact_phone"])){
            require_once("model/home/add_contact.php");
            $add_contact = add_contact();
            if(!$add_contact){
                $_SESSION['flash']['danger'] = 'Nous n\'avons pas pu ajouter votre contact.';
                header("Location:?module=home&action=index");
                exit();
            }
            else{
                $_SESSION['flash']['success'] = 'Nous avons bien récupéré votre contact. Nous vous recontactons dés que possible.';
                header("Location:?module=home&action=index");
                exit();
            }
        }
        else{
            $_SESSION['flash']['warning'] = 'Veuillez remplir tous les champs.';
            header("Location:?module=home&action=index");
            exit();
        }


    }else{
        include_once('view/home/index.php');
    }
