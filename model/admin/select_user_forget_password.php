<?php
    function select_user_forget_password($email){
        try{
            global $bdd;
            $query = "SELECT * FROM so_user u
                      WHERE u.so_user_email=:so_user_email";

            $q = $bdd->prepare($query);
            $q->bindValue(':so_user_email', $email, PDO::PARAM_STR);
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