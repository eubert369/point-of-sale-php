<?php
include "./connection.php";
try {
    $id = $_REQUEST['id'];
    echo $id;
    $sql = "DELETE FROM users WHERE id=$id";
    $conn->query($sql);
    $conn->close();
    header("Location: admin.php");      
} catch (\Throwable $th) {
    throw $th;
}
