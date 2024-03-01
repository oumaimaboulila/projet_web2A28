<?php
require_once "../config.php";

class employerC
{
    public function listemployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            $result = $liste->fetchAll();
            return $result;

        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function delete()
    {
        $sql = "delete FROM employe where id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query ->bindValue (':id', 1);
            $query ->execute();


        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function insert()
    {
        $sql = "INSERT INTO employe (id, lastname, firstname, email, dob) VALUES (:id, :lastname, :firstname, :email, :dob)";
        $db = config::getConnexion();
        
        try {
            $query = $db->prepare($sql);
            
            $query->bindValue(':id', 23);
            $query->bindValue(':lastname', 'hedyen');
            $query->bindValue(':firstname', 'haj_yahia');
            $query->bindValue(':email', 'hedn@email.com');
            $query->bindValue(':dob', '2003-01-01');
            
            $query->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    



}

?>