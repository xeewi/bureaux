<?php
    function count_all_leads()
    {
        try{
            global $bdd;
            $query = $bdd->prepare("SELECT COUNT(*) FROM so_lead");
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