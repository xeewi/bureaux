<?php
    function delete_company($company_id){
        try{
            $company_id = (int)$company_id;
            global $bdd;

            $delete = $bdd->prepare("DELETE FROM so_company WHERE so_company_id =:company_id");
            $delete->bindParam(':company_id', $company_id, PDO::PARAM_INT);
            $delete->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }