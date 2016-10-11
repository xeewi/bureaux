<?php
    function select_company($company_id){
        try{
            $company_id = (int)$company_id;

            global $bdd;
            $query = "SELECT * FROM so_company c
                      WHERE c.so_company_id =:company_id";
            $q = $bdd->prepare($query);
            $q->bindParam(':company_id', $company_id, PDO::PARAM_INT);
            $q->execute();
            $current_company= $q->fetch();
            $q->closeCursor();
            return $current_company;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }