<?php
    function search_page($city_name){
        try{

            $city_name .= '%';
            global $bdd;
            $query = "SELECT *
                      FROM so_page
                      JOIN so_city
                      ON so_page_city_id=so_city_id
                      JOIN so_region
                      ON so_city_region_id=so_region_id
                      WHERE so_city_name LIKE :city_name";
            $q = $bdd->prepare($query);
            $q->bindParam(':city_name', $city_name, PDO::PARAM_STR);
            $q->execute();
            $result= $q->fetchAll();
            $q->closeCursor();
            return $result;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }
