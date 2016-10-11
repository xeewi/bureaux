<?php
    function delete_closed_leads(){
        try{
            global $bdd;
            $delete = $bdd->prepare("DELETE FROM so_lead WHERE so_lead_status_id = 3");
            $delete->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }