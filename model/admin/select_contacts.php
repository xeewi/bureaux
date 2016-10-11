<?php
    function select_contacts(){
        try{
            global $bdd;
            $query = "SELECT * FROM so_contact co
                          ORDER BY co.so_contact_name";
            $q = $bdd->prepare($query);
            $q->execute();
            $contacts= $q->fetchAll();
            $q->closeCursor();
            return $contacts;
        }
        catch(Exception $e) {
            $q->closeCursor();
            return false;
        }
    }