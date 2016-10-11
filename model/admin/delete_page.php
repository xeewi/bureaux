<?php
    function delete_page($page_id){
        try{
            $page_id = (int)$page_id;
            global $bdd;

            $delete = $bdd->prepare("DELETE FROM so_page WHERE so_page_id =:page_id");
            $delete->bindParam(':page_id', $page_id, PDO::PARAM_INT);
            $delete->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }