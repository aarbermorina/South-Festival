<?php
require_once '../config/Database.php';

class TicketsController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->getPDO()->query('SELECT * FROM tickets');
        $query->execute();

        return $query->fetchAll();
    }

    public function addTicket($request){
        $query = $this->db->getPDO()->prepare('INSERT INTO tickets (type,price,validity) VALUES (:type, :price, :validity)');
        $query->bindParam(':type',$request['type']);
        $query->bindParam(':price',$request['price']);
        $query->bindParam(':validity',$request['validity']);
        $query->execute();

        return header("Location: ../pages/TicketsDash.php");
    }

    public function removeTicket($request){
        $query = $this->db->getPDO()->prepare('DELETE FROM tickets WHERE ticket_id = :id');
        $query->bindParam(':id',$request['deleteId']);
        $query->execute();

        return header("Location: ../pages/TicketsDash.php");
    }
}
?>