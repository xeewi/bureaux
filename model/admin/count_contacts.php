<?php
    function count_contacts()
    {
        try{
            global $bdd;
            $query = $bdd->prepare("SELECT COUNT(*) FROM so_contact");
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