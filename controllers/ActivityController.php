<?php
require_once '../config/Database.php';

class ActivityController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->getPDO()->query('SELECT * FROM activity');
        $query->execute();

        return $query->fetchAll();
    }

    public function ticketAdd($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' added a new ticket: '.$request['type'].' - '.$request['price'].' $ - '.$request['validity'].' 3 days.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function ticketRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed a ticket: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function orderAdd($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' added a new Order: User Id - '.$request['userId'].', Ticket Id - '.$request['ticketId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function orderRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed an Order: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function contactRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed a Contact: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function userAdd($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' added a new User: '.$request['name'].' '.$request['lastName'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function userEdit($name,$lastName,$request,$id){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' edited a User: User Id - '.$id['id'].', name - '.$request['name'].', last name - '.$request['lastName'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function userRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed a User: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function adminAdd($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' added a new Admin: User Id - '.$request['userId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function adminRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed an Admin: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }
}

?>