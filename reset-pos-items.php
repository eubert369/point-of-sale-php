<?php
include "./connection.php";

try {
    $sql = "DELETE FROM pos_items";
    $conn->query($sql);
    $conn->close();
    header("Location: point-of-sale.php"); 
} catch (\Throwable $th) {
    throw $th;
}
?>