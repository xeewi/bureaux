<?php
    function update_token_user($user_id){
        try{
            global $bdd;

            $user_id = (int)$user_id;

            $query = $bdd->prepare("UPDATE so_user u
                                    SET u.so_user_confirmation_token=NULL WHERE u.so_user_id=:user_id");
            $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $query->execute();
            return true;
        }
        catch (Exception $e){
            return false;
        }
    }