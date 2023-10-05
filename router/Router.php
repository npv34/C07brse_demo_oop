<?php 

class Router {

    private  $page;
    private  $action;


    public function __construct( $page,  $action) {
        $this->page = $page;
        $this->action = $action;
    }

    function hanlderRequest() {
        $orderController = new OrderController();

        switch ($this->page) {
            case "orders":
                $this->hanlderRequestOrder($orderController);
                break;
            default:
                $orderController->index();
        }

    }

    function hanlderRequestOrder($orderController) {
        switch ($this->action) {
            case "detail":
                $orId = $_REQUEST['oID'];
                $orderController->showDetail($orId);
                break;
            default:
                $orderController->index();
        }
    }

}


