<?php
include "./connection.php";

try {
    $id = $_REQUEST['itemID'];
    echo $id;
    $sql = "DELETE FROM menu_items WHERE itemID=$id";
    $conn->query($sql);
    $conn->close();
    header("Location: menu-items.php");      
} catch (\Throwable $th) {
    throw $th;
}
?>