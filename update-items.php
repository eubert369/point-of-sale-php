<?php
include "./connection.php";

// if (isset($_POST['submit'])) {
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $itemID = $_REQUEST['itemID'];
    $productName = $_REQUEST['productName'];
    $category = $_REQUEST['category'];
    $price = $_REQUEST['price'];

    if (empty($itemID) || empty($productName) || $category == "Category" || empty($price)) {
        echo '<p class="text-danger text-center">Please fill all the inputs</p>';
    } else {
        try {
            $sql = "UPDATE menu_items SET productName='$productName', category='$category', price='$price' WHERE itemID='$itemID'";
            $result = $conn->query($sql);
            $conn->close();
            header("Location: menu-items.php");
        } catch (\Throwable $th) {
            echo $th;
        }        
    }
}
// }
