<?php
    function select_contact($contact_id){
        try{
            $contact_id = (int)$contact_id;

            global $bdd;
            $query = "SELECT * FROM so_contact co
                          WHERE co.so_contact_id =:contact_id";
            $q = $bdd->prepare($query);
            $q->bindParam(':contact_id', $contact_id, PDO::PARAM_INT);
            $q->execute();
            $current_contact= $q->fetch();
            $q->closeCursor();
            return $current_contact;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }