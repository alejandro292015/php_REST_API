<?php
   
   class Database {

   
    private $db_host = 'bzw2kynj0tcamkw0j9wn-mysql.services.clever-cloud.com';
    private $db_name = 'bzw2kynj0tcamkw0j9wn';
    private $db_username = 'ultyt5gonpvdkiju';
    private $db_password = 'yjQYmZvOZpF6Z7NIKhfY';

    public function dbConnection (){
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn ;
        }
        catch (PDOException $e){
            echo "Connection error " .$e->getMessage();
            exit;
        }
    }

   }
   ?>