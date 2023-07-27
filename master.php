<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-3">
                <div class=" px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start text-white min-vh-100">
                        <div class="border-bottom py-3 w-100">
                            <h2 class="fs-2 fw-bold d-sm-block mx-auto text-center" id="staticBackdropLabel">Menu</h2>
                        </div>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="dashboard.php"><span class="material-symbols-outlined">dashboard</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="dashboard.php"> Dashboard</a></a>
                            </li>
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="point-of-sale.php"><span class="material-symbols-outlined">point_of_sale</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="point-of-sale.php"> Point of Sales</a></a>
                            </li>
                            <li class="btn nav-item py-auto mt-4 d-sm-block mx-auto ms-sm-3">
                                <a class="text-white text-decoration-none" href="master.php"><span class="material-symbols-outlined">key</span>
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="master.php">
                                        Master</a></a>
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
            <div class="col">
                <div class="container p-3">
                    <h1 class="m-3 fw-bold" style="font-size: 50px;">Master Entry</h1>
                    <div class="row justify-content-center mt-5">
                        <a id="restaurant-info" class="btn col-4 rounded-4 bg-dark p-3 m-3 text-decoration-none" href="#">
                            <h3 class="text-white text-center">Restaurant Info</h3>
                            <hr class="w-100 text-white border-2">
                            <p class="text-white" style="text-align: justify;">Here, you'll find easy access to all the restaurant information you need.</p>
                        </a>
                        <a id="menu-items" class="btn col-4 rounded-4 bg-dark p-3 m-3 text-decoration-none" href="menu-items.php">
                            <h3 class="text-white text-center">Menu Items</h3>
                            <hr class="w-100 text-white border-2">
                            <p class="text-white" style="text-align: justify;">Here, you can conveniently access and edit the menu items, ensuring you have full control over your restaurant's menu.</p>
                        </a>
                        <a id="inventory-type" class="btn col-4 rounded-4 bg-dark p-3 m-3 text-decoration-none" href="#">
                            <h3 class="text-white text-center">Inventory Type</h3>
                            <hr class="w-100 text-white border-2">
                            <p class="text-white" style="text-align: justify;">Here, you have the ability to access and modify a wide range of items for your restaurant, catering to different needs and preferences.</p>
                        </a>
                        <a id="items-category" class="btn col-4 rounded-4 bg-dark p-3 m-3 text-decoration-none" href="#">
                            <h3 class="text-white text-center">Items Category</h3>
                            <hr class="w-100 text-white border-2">
                            <p class="text-white" style="text-align: justify;">Here, you have the option to categorize various items within your restaurant and make revisions in the Items Category section.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>