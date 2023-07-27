<?php
include "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $date = date("m/d/Y");
    $name  = $_REQUEST['name'];
    $productName = $_REQUEST['productName'];
    $category = $_REQUEST['category'];
    $qty = $_REQUEST['qty'];
    $price = $_REQUEST['price'];
    
    $ammount = doubleval($price) * doubleval($qty);
    
    if (empty($name) || empty($productName) || empty($price) || empty($qty)) {
        header('Location: point-of-sale.php');
    } else {
        try {
            $sql = "INSERT INTO pos_items (date, product_name, category, qty, price) VALUES ('$date', '$productName', '$category', '$qty', '$ammount')";
            $conn->query($sql);
            $conn->close();
            header('Location: point-of-sale.php');
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}
