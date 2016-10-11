<?php
    function update_lead_status($lead_id, $status_id = 3){
        $status_id =(int)$status_id;
        $lead_id =(int)$lead_id;

        try{
            global $bdd;
            $query = $bdd->prepare("UPDATE so_lead SET so_lead_status_id=:status_id WHERE so_lead_id=:lead_id");
            $query->bindParam(':status_id',$status_id, PDO::PARAM_INT);
            $query->bindParam(':lead_id',$lead_id, PDO::PARAM_INT);
            $query->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }