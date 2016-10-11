<?php
    function delete_lead($lead_id){
        try{
            $lead_id = (int)$lead_id;
            global $bdd;

            $delete = $bdd->prepare("DELETE FROM so_lead WHERE so_lead_id =:lead_id");
            $delete->bindParam(':lead_id', $lead_id, PDO::PARAM_INT);
            $delete->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }