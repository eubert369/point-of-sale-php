<?php
include "./connection.php";

try {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];        

        $sql = "UPDATE users SET name='$name', username='$username', password='$password' WHERE id=$id";
        $result = $conn->query($sql);        
        $conn->close();
        header("location: admin.php");
    }
} catch (\Throwable $th) {
    echo $th;
}

