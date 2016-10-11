<?php
    function select_page($page_id){
        try{
            $page_id = (int)$page_id;

            global $bdd;
            $query = "SELECT * FROM so_page p
                        JOIN so_city c
                        ON p.so_page_city_id = c.so_city_id
                        JOIN so_region r 
                        ON c.so_city_region_id = r.so_region_id
                        WHERE p.so_page_id =:page_id";
            $q = $bdd->prepare($query);
            $q->bindParam(':page_id', $page_id, PDO::PARAM_INT);
            $q->execute();
            $current_page= $q->fetch();
            $q->closeCursor();
            return $current_page;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }