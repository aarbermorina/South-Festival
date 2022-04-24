<?php
require_once '../config/Database.php';

class OrdersController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->getPDO()->prepare('SELECT * FROM orders o, users u, tickets t WHERE o.ticket_id = t.ticket_id AND o.user_id = u.user_Id');
        $query->execute();

        return $query->fetchAll();
    }

    public function order($user, $ticket){
        $query = $this->db->getPDO()->prepare('INSERT INTO orders (ticket_id, user_id) VALUES (:ticketId, :user_id)');
        $query->bindParam(':ticketId',$ticket);
        $query->bindParam(':user_id',$user);
        $query->execute();

        return header('Location: ../pages/Tickets.php');
    }
    //locations
    public function addOrder($request){
        $query = $this->db->getPDO()->prepare('INSERT INTO orders (ticket_id, user_id) VALUES (:ticketId, :user_id)');
        $query->bindParam(':ticketId',$request['ticketId']);
        $query->bindParam(':user_id',$request['userId']);
        $query->execute();

        return header('Location: ../pages/Orders.php');
    }

    public function removeOrder($request){
        $query = $this->db->getPDO()->prepare('DELETE FROM orders WHERE order_id = :orderId');
        $query->bindParam('orderId',$request['deleteId']);
        $query->execute();

        return header('Location: ../pages/Orders.php');
    }
}

?>