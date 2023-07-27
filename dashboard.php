<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-3">
                <!-- <iframe class="min-vh-100 w-100" src="sidebar.php" frameborder="0"></iframe> -->
                <div class=" px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start text-white min-vh-100">
                        <div class="border-bottom py-3 w-100">
                            <h2 class="fs-2 fw-bold d-sm-block mx-auto text-center" id="staticBackdropLabel">Menu</h2>
                        </div>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <!-- <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="dashboard.php"><span class="material-symbols-outlined">dashboard</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="dashboard.php"> Dashboard</a></a>
                            </li> -->
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="point-of-sale.php"><span class="material-symbols-outlined">point_of_sale</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="point-of-sale.php"> Point of Sales</a></a>
                            </li>
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="master.php"><span class="material-symbols-outlined">restaurant_menu</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="menu-items.php">
                                        Menu-Items</a></a>
                            </li>
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="admin.php"><span class="material-symbols-outlined">admin_panel_settings</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="admin.php">
                                        Admin</a></a>
                            </li>
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3 position-absolute bottom-0">
                                <a class="text-white text-decoration-none" href="login.php"><span class="material-symbols-outlined">logout</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="login.php">
                                        Logout</a></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </body> -->
            <div class="col-9">
                <div class="container p-3">
                    <h1 class="m-3 fw-bold" style="font-size: 50px;">Dashboard</h1>
                    <p class="text-dark fs-3 mx-3" style="text-align: justify;">&emsp;Welcome to our personalized Point of Sale (POS) Dashboard, your central hub for streamlined sales management. Monitor real-time transactions, and effortlessly analyze sales data to drive your business forward. Take control with our intuitive interface designed to enhance your productivity and elevate the customer experience. Let's power up your business and unlock new possibilities together.</p>
                    <div class="row ms-3 mt-5 justify-content-center">
                        <div class="m-3 card col-3 text-white bg-dark " style="width: 18rem;">
                            <div class="card-body">
                                <div class="border-bottom p-2">
                                    <h3 class="card-title fw-bold">Total Orders</h3>
                                </div>
                                <div class="p-3">
                                    <p class="card-text fs-3 ms-2">3</p>
                                </div>
                            </div>
                        </div>

                        <div class="m-3 card col-3 text-white bg-dark " style="width: 18rem;">
                            <div class="card-body">
                                <div class="border-bottom p-2">
                                    <h3 class="card-title fw-bold">Total Sales</h3>
                                </div>
                                <div class="p-3">
                                    <p class="card-text fs-3 ms-2">113.00</p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="m-3 card col-3 text-white bg-dark " style="width: 18rem;">
                            <div class="card-body">
                                <div class="border-bottom p-2">
                                    <h3 class="card-title fw-bold">Pending Orders</h3>
                                </div>
                                <div class="p-3">
                                    <p class="card-text fs-3 ms-2">0</p>
                                </div>
                            </div>
                        </div>

                        <div class="m-3 card col-3 text-white bg-dark " style="width: 18rem;">
                            <div class="card-body">
                                <div class="border-bottom p-2">
                                    <h3 class="card-title fw-bold">Delivered Orders</h3>
                                </div>
                                <div class="p-3">
                                    <p class="card-text fs-3 ms-2">0</p>
                                </div>
                            </div>
                        </div>

                        <div class="m-3 card col-3 text-white bg-dark " style="width: 18rem;">
                            <div class="card-body">
                                <div class="border-bottom p-2">
                                    <h3 class="card-title fw-bold">Rejected Orders</h3>
                                </div>
                                <div class="p-3">
                                    <p class="card-text fs-3 ms-2">0</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="bootstrap.bundle.min.js"></script>

</html>