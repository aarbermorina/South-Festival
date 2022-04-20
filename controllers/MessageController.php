<?php
    require_once '../config/Database.php';

    class MessageController{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function readData(){
            $query = $this->db->getPDO()->query('SELECT * from contact');

            return $query->fetchAll();
        }

        public function send($request){
            $query = $this->db->getPDO()->prepare('INSERT INTO contact (fullName, email, title, msg) VALUES (:fullName,:email,:title,:msg)');

            $query->bindParam(':fullName',$request['fullName']);
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':title',$request['title']);
            $query->bindParam(':msg',$request['msg']);
            $query->execute();
            
            return header('Location: ../pages/Contact-us.php');
        }

        public function delete($id){
            $query = $this->db->getPDO()->prepare('DELETE FROM contact WHERE contact_id = :id');
            $query->bindParam(':id',$id['deleteId']);
            $query->execute();

            return header('Location: Contact.php');
        }
    }
?>