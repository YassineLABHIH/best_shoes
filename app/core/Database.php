<?php

class Database
{
    public static $con;

   /**
     * Database class
     */
    public function __construct()
    {
        try {
            self::$con = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die;
        }
    }

    
    /**
     * Get instance from Databse
     * 
     */
    public static function getInstance() 
    {
        if (self::$con) {
            return self::$con;
        }
        return $instance = new self;
    }

   /**
     * Read from database
     * 
     */
    public function read($query, $data = array())
    {
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        if ($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data)) {
                return $data;
            }
        }

        return false;
    }

   /**
     * Write from database
     */
    public function write($query, $data = array())
    {
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        if ($result) {

            return true;
        }

        return false;
    }
}
