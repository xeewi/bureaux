<?php
    function select_companies(){
        try{
            global $bdd;
            $query = "SELECT * FROM so_company 
                      ORDER BY so_company_name";
            $q = $bdd->prepare($query);
            $q->execute();
            $companies= $q->fetchAll();
            $q->closeCursor();
            return $companies;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }