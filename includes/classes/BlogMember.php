<?php

    class BlogMember extends BlogReader{
        
        private $email;
        private $username;
        private $phone;
    

        
        public function __construct($pEmail,$pUsername,$pPhone){
            parent::__construct();
            $this->email = $pEmail;
            $this->username=$pUsername;
            $this->phone=$pPhone;
            $this->type = BlogMember::MEMBER;
        }
        
        public function isDuplicateID(){
            
            $sql = "SELECT count(email) AS num FROM users WHERE email = :email";
            
            $values = array(
                array(':email', $this->email)
            );
        
            $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

            if ($result['num'] == 0)
                return false;
            else
                return true;                
            
        }
        
        public function insertIntoUserDB($pPassword){
            
            $sql = "INSERT INTO users (email, password,username,phone) VALUES (:email, :password,:username,:phone)";
            
            $values = array(
                array(':email', $this->email),
                array(':password', password_hash($pPassword, PASSWORD_DEFAULT)),
                array(':username',$this->username),
                array(':phone',$this->phone)
            );

            $this->db->queryDB($sql, Database::EXECUTE, $values);

        }

        public function insertAdminIntoUserDB($pPassword){
            
            $sql = "INSERT INTO users (email,username, password,phone,is_admin) VALUES (:email,:username, :password,:phone,true)";
            
            $values = array(
                array(':email',$this->email),
                array(':username', $this->username),
                array(':password', password_hash($pPassword, PASSWORD_DEFAULT)),
                array(':phone',$this->phone)
                
            );

            $this->db->queryDB($sql, Database::EXECUTE, $values);

        }
        
        public function isValidLogin($pPassword){
            $sql = "SELECT password FROM users WHERE email = :email";
            
            $values = array(
                array(':email', $this->email)
            );

            $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);
            
            if (isset($result['password']) && password_verify($pPassword, $result['password']))
                return true;
            else
                return false;

        }
        
        private function getLatestPostID(){
            $sql = "SELECT max(id) AS max FROM posts";
            
            $result = $this->db->queryDB($sql, Database::SELECTSINGLE);
            
            if (isset($result['max']))
                return $result['max'];
            else
                return 0;
            
        }
        
        public function updateLastViewedPost(){
            $max = $this->getLatestPostID();
            
            $sql = "UPDATE members SET last_viewed = :max WHERE username = :username";
            
            $values = array(
                array(':max', $max),
                array(':username', $this->username)
            );

            $this->db->queryDB($sql, Database::EXECUTE, $values);
            
        }
        
        // public function getLastViewedPost(){
        //     $sql = "SELECT last_viewed FROM members WHERE username = :username";

        //     $values = array(
        //         array(':username', $this->username)
        //     );

        //     $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);
            
        //     if (isset($result['last_viewed']))
        //         return $result['last_viewed'];
        //     else
        //         return 0;
            
        // }

        public function getUserFromDB($email){
            $sql="SELECT * FROM users WHERE email=:email";
            $values=array(
                array(':email', $email)
            );

            $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);
            if (count($result) == 0)
            return false;
            else
            return $result;

        }
    }




