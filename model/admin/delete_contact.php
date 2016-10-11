<?php
    function delete_contact($contact_id){
        try{
            $contact_id = (int)$contact_id;
            global $bdd;

            $delete = $bdd->prepare("DELETE FROM so_contact WHERE so_contact_id =:contact_id");
            $delete->bindParam(':contact_id', $contact_id, PDO::PARAM_INT);
            $delete->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }