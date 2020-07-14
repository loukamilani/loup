<?php
    class Database {
        protected static $host = "carre-royal.com";
        protected static $dbname = "carreroy_db";
        protected static $user = "carreroy_louka";
        protected static $pass = "Louka2009Louka2009";
        
        protected static function connect() {
            $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", self::$user, self::$pass);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        
        public static function query($query, $params = array()) {
            $stmt = self::connect()->prepare($query);
            for ($i=0; $i < sizeof($params); $i++) { 
                $nb = $i + 1;
                $stmt->bindParam($nb, $params[$i]);

            }
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            // only executing SELECT queries for security
            
                $data = $stmt->fetchAll();
                return $data;
            
        }
        public static function addQuery($query, $params = array()) {
            $stmt = self::connect()->prepare($query);
            for ($i=0; $i < sizeof($params); $i++) { 
                $nb = $i + 1;
                $stmt->bindParam($nb, $params[$i]);

            }
            
            $stmt->execute();

           
        }
        
    }
?>