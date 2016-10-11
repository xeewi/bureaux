<?php
    function count_closed_leads()
    {
        try{
            global $bdd;
            $query = $bdd->prepare("SELECT COUNT(*) FROM so_lead WHERE so_lead_status_id = 3");
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