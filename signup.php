<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container-fluid bg-dark p-5 min-vh-100">
        <h1 class="text-center text-light fw-bold">Point of Sales</h1>
        <div class="row">
            <div class="container border bg-light col-6 mx-auto text-center rounded-5 px-5 py-4 mt-5">
                <h3 class="fs-2 mb-3">Sign up</h3>
                <form action="signup.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" id="floatingName" placeholder=" " value="" name="name">
                        <label for="floatingName" class="fw-bold">Name</label>
                    </div>
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
                        $name = $_POST["name"];
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        if (empty($_POST["name"]) || empty($_POST["username"]) || empty($_POST["password"])) {
                            echo '<p class="text-danger">Fill all the inputs</p>';
                        } else {
                            try {
                                $sql = "INSERT INTO users (name, username, password) values ('$name', '$username', '$password')";
                                $conn->query($sql);
                                $conn->close();
                                header("Location: point-of-sale.php");
                            } catch (\Throwable $th) {
                                echo $th;
                            }
                        }
                    }
                    ?>
                    <button class="btn btn-primary mb-3 rounded-pill mt-3 btn-dark fw-bold" type="submit">Sign Up</button>
                    <p><a class="fw-bold" href="login.php">Login</a> if you already have an account.</p>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="bootstrap.bundle.min.js"></script>

</html>