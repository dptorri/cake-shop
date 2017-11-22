<?php
//UPDATE a specific record from the database
    require_once 'db.php';

    $pdo = db::pdo();
    //$conn = db_connect();
    
    $orderId = $_POST["orderId"];
    $noOfCakes = $_POST["noOfCakes"];
    $deliveryDate = date("Y-m-d", $_POST["$deliveryDate"]);

    $query = "UPDATE INTO SET `Number of Cakes`='$noOfCakes' WHERE `Order ID`='$orderId';";

    $pdo = db::pdo();
    $statement = db::query($query);
    $data = $statement->fetchAll();
    header("Location: index.php");