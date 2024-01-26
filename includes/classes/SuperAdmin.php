<?php

class SuperAdmin{
    
    private $db;
    private $email;

    public function __construct($pEmail){
        $this->db = new Database();
        $this->email = $pEmail;
    }


    public function isValidLogin($pPassword){
        $sql = "SELECT password FROM users WHERE email = :email AND is_sadmin = true";

        $values = array(
            array(':email', $this->email)
        );

        $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

        if (isset($result['password']) && password_verify($pPassword, $result['password']))
            return true;
        else
            return false;

    } 

    public function insertIntoImagesDB($name,$location){
        $sql="INSERT INTO images (name,location) VALUES (:name,:location)";

        $values=array(
            array(':name',$name),
            array(':location',$location)
        );

        $this->db->queryDB($sql,Database::EXECUTE, $values);
    }
    
    public function insertIntoProductsDB($name, $description, $price){
        
        
        $sql = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";

        $values = array(
            array(':name', $name),
            array(':description', $description),
            array(':price', $price)
        );

        $this->db->queryDB($sql, Database::EXECUTE, $values);
        
    }
    
}


