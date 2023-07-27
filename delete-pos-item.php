<?php
include "./connection.php";

try {
    $id = $_REQUEST['id'];
    // echo $id;
    $sql = "DELETE FROM pos_items WHERE id='$id'";
    $conn->query($sql);
    $conn->close();
    header("Location: point-of-sale.php");      
} catch (\Throwable $th) {
    throw $th;
}
?>