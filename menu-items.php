<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-Items</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="style.css">
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
                                    <a class="fs-4 fw-bold text-white text-decoration-none d-none d-sm-inline" href="master.php">
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
            <div class="col">
                <div class="container p-3">
                    <h1 class="m-3 fw-bold" style="font-size: 50px;">Menu Items</h1>
                    <!-- <a href="master.php" class="btn btn-dark position-absolute rounded-pill p-1 bottom-0 mb-2" style="width: 40px;"><span class="material-symbols-outlined">arrow_back</span></a> -->
                    <button class="btn btn-primary ms-3 me-3" data-bs-toggle="modal" data-bs-target="#addItem">Add Items</button>
                    <!-- Modal for Add Items -->
                    <div class="modal fade" id="addItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-3 fw-bold" id="staticBackdropLabel">Add Items</h1>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="updateForm" action="menu-items.php" method="POST">
                                        <div class="container">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" placeholder=" " value="" name="itemID">
                                                <label for="floatingName" class="fw-bold">Item ID</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" placeholder=" " value="" name="productName">
                                                <label for="floatingName" class="fw-bold">Product Name</label>
                                            </div>
                                            <select class="form-select mb-3 rounded-pill fw-bold" aria-label="Default select example" name="category">
                                                <option selected hidden>Category</option>
                                                <option value="Meals">Meals</option>
                                                <option value="Drinks">Drinks</option>
                                                <option value="Snacks">Snacks</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control border-2 rounded-pill px-4 fs-4" placeholder=" " value="" name="price" step="0.01">
                                                <label for="floatingName" class="fw-bold">Price</label>
                                            </div>

                                            <?php
                                            include "./connection.php";

                                            if (isset($_POST['submit'])) {
                                                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                    $itemID = $_REQUEST['itemID'];
                                                    $productName = $_REQUEST['productName'];
                                                    $category = $_REQUEST['category'];
                                                    $price = $_REQUEST['price'];

                                                    if (empty($itemID) || empty($productName) || $category == "Category" || empty($price)) {
                                                        echo '<p class="text-danger text-center">Please fill all the inputs</p>';
                                                    } else {
                                                        try {
                                                            $sql = "INSERT INTO menu_items (itemID, productName, category, price) VALUES ('$itemID', '$productName', '$category', '$price')";
                                                            $conn->query($sql);
                                                            $conn->close();
                                                        } catch (\Throwable $th) {
                                                            echo $th;
                                                        }
                                                    }
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="material-symbols-outlined">exit_to_app</span></button>
                                            <button type="submit" class="btn btn-primary" name="submit"><span class="material-symbols-outlined">add</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-dark bg-dark m-3">
                        <th class="border text-center">Item ID</th>
                        <th class="border text-center">Product Name</th>
                        <th class="border text-center">Category</th>
                        <th class="border text-center">Price</th>
                        <!-- <th class="border text-center">Action</th> -->

                        <?php
                        include "./connection.php";

                        $sql = "SELECT * FROM menu_items";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr onclick="update(this)">';
                            echo '<td class="p-2">' . $row["itemID"] . '</td>';
                            echo '<td class="p-2">' . $row["productName"] . '</td>';
                            echo '<td class="p-2">' . $row["category"] . '</td>';
                            echo '<td class="p-2">' . $row["price"] . '</td>';
                            // echo '<td class="p-2 text-center">                                            
                            //         <button type="button" class="btn btn-primary" onclick="updateRow(this)" data-bs-toggle="modal" data-bs-target="#updateItem"><span class="material-symbols-outlined">edit</span></button>
                            //         <a class="btn btn-danger text-center me-1" role="button" onclick="deleteBtn()"><span class="material-symbols-outlined">delete</span></a>
                            //         </td>';
                            // echo '</tr>';
                        }
                        ?>
                        
                    </table>
                    <!-- Modal for Update Items -->
                    <div class="modal fade" id="updateItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-3 fw-bold" id="staticBackdropLabel">Update Items</h1>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="updateForm" action="update-items.php" method="POST">
                                        <div class="container">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" id="itemID" placeholder=" " value="" name="itemID">
                                                <label for="floatingName" class="fw-bold">Item ID</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control border-2 rounded-pill px-4 fs-4" id="productName" placeholder=" " value="" name="productName">
                                                <label for="floatingName" class="fw-bold">Product Name</label>
                                            </div>
                                            <select class="form-select mb-3 rounded-pill fw-bold" aria-label="Default select example" name="category" id="category">
                                                <option selected hidden>Category</option>
                                                <option value="Meals">Meals</option>
                                                <option value="Drinks">Drinks</option>
                                                <option value="Snacks">Snacks</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control border-2 rounded-pill px-4 fs-4" id="price" placeholder=" " value="" name="price" step="any"/>
                                                <label for="floatingName" class="fw-bold">Price</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            <!-- <button type="submit" class="btn btn-primary" name="submit" onclick="updateBtn()">Update</button> -->
                                            <a class="btn btn-danger text-center me-1" role="button" onclick="deleteBtn()"><span class="material-symbols-outlined">delete</span></a>
                                            <button type="submit" class="btn btn-primary" id="save" onclick="updateBtn()"><span class="material-symbols-outlined">edit</span></button>
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
</body>
<script src="bootstrap.bundle.min.js"></script>
<script>
    let itemID;

    function update(row) {
        itemID = row.cells[0].textContent
        var productName = row.cells[1].textContent;
        var category = row.cells[2].textContent;
        var price = row.cells[3].textContent;

        document.getElementById('itemID').value = itemID;
        document.getElementById('productName').value = productName;
        document.getElementById('category').value = category;
        document.getElementById('price').value = price;

        var galleryModal = new bootstrap.Modal(document.getElementById('updateItem'), {
            keyboard: false
        });
        galleryModal.show();
    }

    function deleteBtn() {        
        var choice = confirm("Are you sure you want to delete?");
        if (choice == true) {
            window.location.href = "delete-items.php?itemID="+itemID;            
        } 
    }

    function updateBtn() {        
        var choice = confirm("Confirm update?");
        if (choice == false) {
            return false;
        }
    }
</script>

</html>