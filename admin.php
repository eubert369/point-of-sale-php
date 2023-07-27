<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    table tr:hover td {
        background-color: white;
        color: black;
        cursor: pointer;
    }
</style>

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
            <div class="col-md-9 col-lg-9 col-sm-9 col-9">
                <div class="container p-3">
                    <h1 class="m-3 fw-bold" style="font-size: 50px;">Administration</h1>

                    <div class="container mt-4">
                        <div class="row">

                            <div class="col">
                                <table class="table table-dark border border-2 w-100 mt-3 border-dark bg-dark">
                                    <th class="border text-center border-light">ID</th>
                                    <th class="border text-center border-light">Name</th>
                                    <th class="border text-center border-light">Username</th>
                                    <th class="border text-center border-light">Password</th>
                                    <!-- <th class="border text-center border-light">Action</th> -->

                                    <!-- <a class="btn btn-primary me-1" href="delete.php?id='. $row["id"] .'" role="button">Edit</a> -->
                                    <?php
                                    // try {
                                    include "./connection.php";

                                    $sql = "SELECT * FROM users";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr id="row" onclick="update(this)">';
                                        echo '<td class="p-2">' . $row["id"] . '</td>';
                                        echo '<td class="p-2">' . $row["name"] . '</td>';
                                        echo '<td class="p-2">' . $row["username"] . '</td>';
                                        echo '<td class="p-2">' . $row["password"] . '</td>';
                                        // echo '<td class="p-2 text-center">

                                        //     <button type="button" class="btn btn-primary" onclick="updateRow(this)" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-symbols-outlined">edit</span></button>
                                        //     <a class="btn btn-danger text-center me-1" href="delete-user.php?id=' . $row["id"] . '" role="button" onclick="deleteBtn()"><span class="material-symbols-outlined">delete</span></a>
                                        //     </td>';
                                        echo '</tr>';
                                    }
                                    // } catch (\Throwable $th) {
                                    //     echo $th;
                                    // }
                                    ?>

                                </table>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3 fw-bold" id="staticBackdropLabel">Update Profile</h1>
                                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="updateForm" action="update.php" method="GET">
                                                    <div class="container">
                                                        <input type="hidden" id="id" name="id">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" id="name" placeholder=" " value="" name="name">
                                                            <label for="floatingName" class="fw-bold">Name</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" id="username" placeholder=" " value="" name="username">
                                                            <label for="floatingName" class="fw-bold">Username</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="password" class="form-control border-2 rounded-pill px-4 fs-4" id="password" placeholder=" " value="" name="password">
                                                            <label for="floatingName" class="fw-bold">Password</label>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                        <a class="btn btn-danger text-center me-1" onclick="deleteBtn()"><span class="material-symbols-outlined">delete</span></a>
                                                        <button type="submit" class="btn btn-primary" id="save" onclick="saveBtn()"><span class="material-symbols-outlined">edit</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="bootstrap.bundle.min.js"></script>
<script>
    let id;

    function update(row) {
        id = row.cells[0].textContent;
        var name = row.cells[1].textContent;
        var username = row.cells[2].textContent;
        var password = row.cells[3].textContent;
        document.getElementById('id').value = id;
        document.getElementById('name').value = name;
        document.getElementById('username').value = username;
        document.getElementById('password').value = password;

        var galleryModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false
        });

        galleryModal.show();
    }

    function saveBtn() {
        var choice = confirm("Confirm update?");
        if (choice == false) {
            return false;
        }
    }

    function deleteBtn() {
        var choice = confirm("Are you sure you want to delete?");
        if (choice == true) {
            window.location.href = "delete-user.php?id=" + id;
        }
    }
</script>

</html>