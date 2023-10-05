
<?php 


class OrderController {

    public $orderDb;

    public function __construct()
    {
        $this->orderDb = new OrderDB();
    }

    public function index() {
        $orders = $this->orderDb->getAll();
        include_once("./views/orders/index.php");
    }

    public function showDetail($orderId) {
        $orderInfo = $this->orderDb->getDetailOrder($orderId);
        var_dump($orderInfo);
    }

}