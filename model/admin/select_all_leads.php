<?php
    function select_all_leads(){
        try{
            global $bdd;
            $query = "SELECT * FROM so_lead l
                      JOIN so_status s
                      ON l.so_lead_status_id=s.so_status_id
                      ORDER BY l.so_lead_register_date DESC";

            $q = $bdd->prepare($query);
            $q->execute();
            $all_leads= $q->fetchAll();
            $q->closeCursor();
            return $all_leads;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }