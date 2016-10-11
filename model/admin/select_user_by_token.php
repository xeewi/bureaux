<?php
    function select_user_by_token($token){
        try{
            global $bdd;

            $query = "SELECT * FROM so_user u
                      WHERE u.so_user_confirmation_token=:so_user_confirmation_token";

            $q = $bdd->prepare($query);
            $q->bindParam(':so_user_confirmation_token', $token, PDO::PARAM_STR);
            $q->execute();
            $user= $q->fetch();
            $q->closeCursor();
            return $user;
        }
        catch(Exception $e){
            $q->closeCursor();
            return false;
        }
    }
     