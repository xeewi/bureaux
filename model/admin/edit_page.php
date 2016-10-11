<?php
    function edit_page($page_id){
        try{
            $page_id = (int)$page_id;

            global $bdd;
            $query = $bdd->prepare("UPDATE so_page
                                        SET so_page_content=:so_page_content,
                                            so_page_title=:so_page_title,
                                            so_page_meta_descr=:so_page_meta_descr
                                            so_page_img_url=:so_page_img_url
                                            so_page_city_id=:so_page_city_id
                                            WHERE so_page_id=:page_id");

            $query->bindParam(':page_id',$page_id, PDO::PARAM_INT);
            $query->bindParam(':so_page_content',$_POST['so_page_content'], PDO::PARAM_STR);
            $query->bindParam(':so_page_title',$_POST['so_page_title'], PDO::PARAM_STR);
            $query->bindParam(':so_page_meta_descr',$_POST['so_page_meta_descr'], PDO::PARAM_STR);
            $query->bindParam(':so_page_img_url',$_POST['so_page_img_url'], PDO::PARAM_STR);
            $query->bindParam(':so_page_city_id',$_POST['so_page_city_id'], PDO::PARAM_INT); 
            $query->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }