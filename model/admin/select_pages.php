<?php
    function select_pages(){
        try{
            global $bdd;
            $query = "SELECT * FROM so_page p
                        JOIN so_city s 
                        ON p.so_page_city_id=s.so_city_id
                              ORDER BY p.so_page_title";
            $q = $bdd->prepare($query);
            $q->execute();
            $pages= $q->fetchAll();
            $q->closeCursor();
            return $pages;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }