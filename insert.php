<?php
//INSERT a specific record from the database

    require_once 'db.php';
    $pdo = db::pdo();
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $noOfCakes = $_POST["noOfCakes"];
    $deliveryDate = date("Y-m-d", $_POST["$deliveryDate"]);

    $query = "INSERT INTO orders (`Customer Name`,`Customer Email`,`Customer Address`,`Number of Cakes`,`Delivery Date`) VALUES ($name,$email,$address,$noOfCakes,$deliveryDate);";

    $pdo = db::pdo();
    $statement = db::query($query);
    $data = $statement->fetchAll();
    header("Location: index.php");