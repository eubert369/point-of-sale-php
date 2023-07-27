<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<div class="row">
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
    <!-- </div>
</body>
</html> -->
    <!-- <div class="row bg-dark">
    <div class="col-md-3">
        <div class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div> -->

    <!-- <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">Menu</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                </li>
                <li>
                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">loser</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->