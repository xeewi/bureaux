<?php
    function select_pending_leads(){
        try{
            global $bdd;
            $query = "SELECT * FROM so_lead l
                      JOIN so_status s
                      ON l.so_lead_status_id=s.so_status_id
                       WHERE l.so_lead_status_id=2
                      ORDER BY l.so_lead_register_date DESC";

            $q = $bdd->prepare($query);
            $q->execute();
            $pending_leads= $q->fetchAll();
            $q->closeCursor();
            return $pending_leads;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }