<?php
    function edit_company($company_id){
        try{
            $company_id = (int)$company_id;

            global $bdd;
            $query = $bdd->prepare("UPDATE so_company
                                    SET so_company_name=:so_company_name,
                                        so_company_email=:so_company_email,
                                        so_company_phone=:so_company_phone
                                        WHERE so_company_id=:company_id");


            $query->bindParam(':company_id',$company_id, PDO::PARAM_INT);
            $query->bindParam(':so_company_name',$_POST['so_company_name'], PDO::PARAM_STR);
            $query->bindParam(':so_company_email',$_POST['so_company_email'], PDO::PARAM_STR);
            $query->bindParam(':so_company_phone',$_POST['so_company_phone'], PDO::PARAM_INT);
            $query->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }