<?php

class BlogReader{

    const READER = 1;
    const MEMBER = 2;
    
    protected $db;
    protected $type;

    public function __construct(){
        
        $this->db = new Database();
        $this->type = BlogReader::READER;
    }    

    public function getImagesFromDB(){
        $sql = "SELECT * FROM images";
        
        $result = $this->db->queryDB($sql, Database::SELECTALL);
        
        if (count($result) == 0)
            return false;
        else
            return $result;
    }
    
    //Add getProductsFromDB() here
    public function getProductsFromDB()
    {
        $sql="SELECT * FROM products";
        
        $result = $this->db->queryDB($sql, Database::SELECTALL);
        
        if (count($result) == 0)
            return false;
        else
            return $result;}
        
            
            

    }

?>
