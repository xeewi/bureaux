<?php
    function add_company(){
        try{
            global $bdd;
            $insert = $bdd->prepare("INSERT INTO so_company (so_company_name, so_company_email, so_company_phone)
                                            VALUES(:so_company_name, :so_company_email, :so_company_phone)");

            $insert->bindParam(':so_company_name', $_POST['so_company_name'], PDO::PARAM_STR);
            $insert->bindParam(':so_company_email', $_POST['so_company_email'], PDO::PARAM_STR);
            $insert->bindParam(':so_company_phone',$_POST['so_company_phone'], PDO::PARAM_STR);
            $insert->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }