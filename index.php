<?php

include_once("./src/DBConnect.php");
include_once("./src/OrderDB.php");
include_once("./src/OrderController.php");
include_once("./router/Router.php");

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table {
            width: 500px;
            border-collapse: collapse;
        }

        tr,
        td {
            border: 1px solid red;
        }

        tr:hover {
            background-color: red;
        }

        #order-table-header {
            background-color: green;
            color: white;
        }
    </style>
</head>

<body>
    <div class="conatiner">
        <?php
            $router = new Router($page, $action);
            $router->hanlderRequest();
        ?>
    </div>
</body>

</html>