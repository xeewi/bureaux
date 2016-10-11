<?php
    function select_new_leads(){
        try{
               global $bdd;
            $query = "SELECT * FROM so_lead l
                      JOIN so_status s
                      ON l.so_lead_status_id=s.so_status_id
                    WHERE l.so_lead_status_id=1
                      ORDER BY l.so_lead_register_date DESC";

            $q = $bdd->prepare($query);
            $q->execute();
            $new_leads= $q->fetchAll();
            $q->closeCursor();
            return $new_leads;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }