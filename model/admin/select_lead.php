<?php
    function select_lead($lead_id){
        try{
            $lead_id = (int)$lead_id;

            global $bdd;
            $query = "SELECT * FROM so_lead l
                        JOIN so_page p 
                        ON l.so_lead_page_id = p.so_page_id
                        JOIN so_city c 
                        ON p.so_page_city_id = c.so_city_id
                        JOIN so_region r
                        ON c.so_city_region_id = r.so_region_id
                              WHERE l.so_lead_id =:lead_id";
            $q = $bdd->prepare($query);
            $q->bindParam(':lead_id', $lead_id, PDO::PARAM_INT);
            $q->execute();
            $current_lead= $q->fetch();
            $q->closeCursor();
            return $current_lead;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }