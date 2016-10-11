<?php
    function add_lead($so_lead_page_id){
        try{

            $_POST['so_lead_capacity'] = (int)$_POST['so_lead_capacity'];
            $_POST['so_lead_duration'] = (int)$_POST['so_lead_duration'];
            $so_lead_page_id = (int)$so_lead_page_id;

            global $bdd;
            $insert = $bdd->prepare("INSERT INTO so_lead (so_lead_firstname, so_lead_lastname, so_lead_phone, so_lead_capacity, so_lead_register_date, so_lead_page_id, so_lead_status_id, so_lead_email, so_lead_duration)
                                                    VALUES(:so_lead_firstname, :so_lead_lastname, :so_lead_phone, :so_lead_capacity, NOW(), :so_lead_page_id, :so_lead_status_id, :so_lead_email, :so_lead_duration)");

            $insert->bindParam(':so_lead_firstname', $_POST['so_lead_firstname'], PDO::PARAM_STR);
            $insert->bindParam(':so_lead_lastname', $_POST['so_lead_lastname'], PDO::PARAM_STR);
            $insert->bindParam(':so_lead_phone',$_POST['so_lead_phone'], PDO::PARAM_STR);
            $insert->bindParam(':so_lead_capacity',$_POST['so_lead_capacity'], PDO::PARAM_INT);
            $insert->bindParam(':so_lead_page_id',$so_lead_page_id, PDO::PARAM_INT);
            $insert->bindParam(':so_lead_email',$_POST['so_lead_email'], PDO::PARAM_STR);
            $insert->bindParam(':so_lead_duration',$_POST['so_lead_duration'], PDO::PARAM_INT);
            $insert->bindValue(':so_lead_status_id', 1, PDO::PARAM_INT);
            $insert->execute();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }