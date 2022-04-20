<?php
    class Database{
        private $pdo;

        public function __construct(){
            try{
                if(!isset($_SESSION) || empty($_SESSION)){
                    session_start();
                }
                
                $link = new PDO('mysql:host=localhost;dbname=southfestival','root','');
                $this->pdo = $link;
            }catch(PDOException $exception){
                die($exception->getMessage());
            }
        }

        public function getPDO(){
            return $this->pdo;
        }
    }
?>