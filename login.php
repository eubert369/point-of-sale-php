<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container-fluid p-5 min-vh-100">
        <h1 class="text-center fw-bold">Point of Sales</h1>
        <div class="row">
            <div class="container border bg-dark col-6 mx-auto text-center rounded-5 px-5 py-4 mt-5 w-50">
                <h3 class="fs-2 mb-3 text-white">Login</h3>
                <form action="login.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" id="floatingName" placeholder=" " value="" name="username">
                        <label for="floatingName" class="fw-bold">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control border-2 rounded-pill px-4 fs-4" id="floatingName" placeholder=" " value="" name="password">
                        <label for="floatingName" class="fw-bold">Password</label>
                    </div>                 
                    <?php
                    include "./connection.php";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["username"]) || empty($_POST["password"])) {
                            echo '<p class="text-danger">Fill all the inputs</p>';
                        } else {
                            $username = $_POST["username"];
                            $password = $_POST["password"];

                            try {
                                $sql = "SELECT * FROM users";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    if ($row["username"] == $username && $row["password"] == $password) {                                        
                                        header("Location: point-of-sale.php");
                                    }
                                }
                                $conn->close();                                                   
                            } catch (\Throwable $th) {
                                echo "No such entry";
                            }
                        }
                    }
                    ?>
                    <button class="btn btn-primary mb-3 rounded-pill mt-3 btn-light fw-bold" type="submit">Login</button>
                    <p class="text-white"><a class="fw-bold" href="signup.php">Signup</a> if you don't have an account.</p>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap.bundle.min.js"></script>

</html>