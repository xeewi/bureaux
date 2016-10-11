<?php
    function add_contact(){
        try{
            global $bdd;
            $insert = $bdd->prepare("INSERT INTO so_contact (so_contact_name, so_contact_email, so_contact_phone)
                                                VALUES(:so_contact_name, :so_contact_email, :so_contact_phone)");

            $insert->bindParam(':so_contact_email', $_POST['so_contact_email'], PDO::PARAM_STR);
            $insert->bindParam(':so_contact_name', $_POST['so_contact_name'], PDO::PARAM_STR);
            $insert->bindParam(':so_contact_phone',$_POST['so_contact_phone'], PDO::PARAM_STR);
            $insert->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }