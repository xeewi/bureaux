<?php
    function count_new_leads()
    {
        try{
            global $bdd;
            $query = $bdd->prepare("SELECT COUNT(*) FROM so_lead WHERE so_lead_status_id = 1");
            $query->execute();
            $count=$query->fetch();
            $query->closeCursor();
            return (int)$count[0];
        }
        catch(Exception $e)
        {
            $query->closeCursor();
            return false;
        }
    }