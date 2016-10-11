<?php
    function add_page(){
        try{
            global $bdd;
            $insert = $bdd->prepare("INSERT INTO so_page (so_page_content, so_page_title, so_page_meta_descr, so_page_img_url, so_page_city_id)
                                                VALUES(:so_page_content, :so_page_title, :so_page_meta_descr, :so_page_img_url, :so_page_city_id)");

            $insert->bindParam(':so_page_content', $_POST['so_page_content'], PDO::PARAM_STR);
            $insert->bindParam(':so_page_title', $_POST['so_page_title'], PDO::PARAM_STR);
            $insert->bindParam(':so_page_meta_descr',$_POST['so_page_meta_descr'], PDO::PARAM_STR);
            $insert->bindParam(':so_page_img_url',$_POST['so_page_img_url'], PDO::PARAM_STR);
            $insert->bindParam(':so_page_city_id',$_POST['so_page_city_id'], PDO::PARAM_INT);
            $insert->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }