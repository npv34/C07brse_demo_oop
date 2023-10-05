<?php 

class OrderDB {

    public PDO $connection;

    public function __construct() {
        $db = new DBConnect("mysql:host=localhost;dbname=classicmodels", "root", "123456@Abc");
        $this->connection = $db->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM classicmodels.orders LIMIT 20";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getDetailOrder($orderId){
        $sql = " CALL get_order_by_order_number(?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $orderId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
 }