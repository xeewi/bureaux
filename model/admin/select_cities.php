<?php
    function select_cities(){
        try{
            global $bdd;
            $query = "SELECT * FROM so_city c
                          JOIN so_region r
                          ON c.so_city_region_id=r.so_region_id
                          ORDER BY so_city_name";

            $q = $bdd->prepare($query);
            $q->execute();
            $all_cities= $q->fetchAll();
            $q->closeCursor();
            return $all_cities;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }