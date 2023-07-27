<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
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
    body {
        overflow-y: hidden;
        overflow-x: hidden;
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
                                <a class="text-white text-decoration-none" href="master.php"><span class="material-symbols-outlined"><span class="material-symbols-outlined">restaurant_menu</span></span>
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
            <div class="col">
                <div class="container p-3">
                    <h1 class="m-3 fw-bold" style="font-size: 50px;">Point of Sales</h1>
                    <div class="row mx-3">

                        <div class="col border border-2 rounded-3 px-4 py-3 bg-dark">
                            <form id="form" method="post">
                                <input type="text" id="id" hidden>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control px-4" id="name" name="name" placeholder=" ">
                                    <label for="name" class="fw-bold">Customer Name:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-control form-select mb-3 fw-bold px-4" aria-label="Default select example" onchange="selectCategory(this)" id="category" name="category">
                                        <!-- <option hidden>Category</option> -->
                                        <option value="Meals">Meals</option>
                                        <option value="Drinks">Drinks</option>
                                        <option value="Snacks">Snacks</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <label for="category" class="fw-bold">Category:</label>
                                </div>
                                <script>
                                    var name = sessionStorage.getItem('name');
                                    var categorySelected = sessionStorage.getItem('selectedCategory');
                                    if (categorySelected) {
                                        document.getElementById('name').value = name;
                                        document.getElementById('category').value = categorySelected;
                                    }

                                    function selectCategory(select) {
                                        document.cookie = "category=" + select.value;
                                        var name = document.getElementById('name').value;
                                        sessionStorage.setItem('selectedCategory', select.value);
                                        sessionStorage.setItem('name', name);
                                        select.form.submit();
                                    }
                                </script>
                                <div class="form-floating mb-3">
                                    <select class="form-control form-select mb-3 fw-bold px-4" aria-label="Default select example" onchange="selectProduct(this)" id="productName" name="productName">
                                        <!-- <option selected hidden>Product Name</option> -->
                                        <?php
                                        include "./connection.php";
                                        $category = $_COOKIE['category'];

                                        if (empty($category)) {
                                            echo "<option>Product Name</option>";
                                        } else {
                                            $sql = "SELECT * FROM menu_items WHERE category='$category'";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value=" . $row["productName"] . ">" . $row["productName"] . "</option>";
                                            }
                                            $conn->close();
                                        }

                                        ?>
                                    </select>
                                    <label for="productName" class="fw-bold">Product Name:</label>
                                </div>
                                <script>
                                    var productSelected = sessionStorage.getItem('selectedProduct');
                                    if (productSelected) {
                                        document.getElementById('productName').value = productSelected;
                                    }

                                    function selectProduct(select) {
                                        document.cookie = "product=" + select.value;
                                        sessionStorage.setItem('selectedProduct', select.value);
                                        select.form.submit();
                                    }
                                </script>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control px-4 bg-white text-end fw-bold fs-4" id="price" placeholder="" name="price" value="<?php
                                                                                                                                                                include "./connection.php";
                                                                                                                                                                // $productName = $_REQUEST['product'];
                                                                                                                                                                $productName = $_COOKIE['product'];
                                                                                                                                                                // echo $productName;
                                                                                                                                                                $sql = "SELECT * FROM menu_items WHERE productName='$productName'";
                                                                                                                                                                $result = $conn->query($sql);
                                                                                                                                                                while ($row = $result->fetch_assoc()) {
                                                                                                                                                                    echo $row["price"];
                                                                                                                                                                }
                                                                                                                                                                ?>">
                                    <label for="price" class="fs-4 fw-bold">Price:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control px-4" id="qty" name="qty" placeholder=" ">
                                    <label for="qty" class="fw-bold">Quantity:</label>
                                </div>

                                <div class="row">
                                    <a class="btn btn-primary col mx-3 rounded-pill text-decoration-none text-black" onclick="addBtn()"><span class="material-symbols-outlined">add</span></a>
                                    <a class="btn btn-success col mx-3 rounded-pill text-decoration-none text-black" onclick="clearBtn()"><span class="material-symbols-outlined">backspace</span></a>
                                    <a class="btn btn-danger col mx-3 rounded-pill text-decoration-none text-black" onclick="deleteBtn()"><span class="material-symbols-outlined">delete</span></a>
                                    <a class="btn btn-info col mx-3 rounded-pill text-decoration-none text-black" onclick="cashInBtn()"><span class="material-symbols-outlined"><span class="material-symbols-outlined">payments</span></span></a>
                                </div>
                                <!-- cash-in modal -->
                                <div class="modal fade" id="cashIn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header bg-light">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">CASH PAYMENT</h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control px-4 bg-white" id="cashInput" name="cash" placeholder=" ">
                                                    <label for="cash" class="fw-bold">Cash:</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="material-symbols-outlined">close</span></button>
                                                <button type="button" class="btn btn-primary" onclick="receipt()" data-bs-dismiss="modal"><span class="material-symbols-outlined">receipt</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- receipt modal -->
                                <div class="modal fade" id="receipt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header bg-light">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">RECEIPT</h1>
                                            </div>
                                            <div id="receipt" class="modal-body mx-5 my-2 border border-black bg-white">
                                                <p class="text-center fs-5 m-0 fw-bold">RECEIPT OF SALE</p>
                                                <p class="text-center m-0">POINT OF SALES SYSTEM</p>
                                                <p class="text-center m-0">TEL: 0916 - 945 -2347</p>
                                                <p class="text-center m-0">LEYTE NORMAL UNIVERSITY</p>
                                                <p class="text-center m-0">==================================</p>
                                                <table id="receiptTable" class="w-100">
                                                    <th>Qty</th>
                                                    <th>Description</th>
                                                    <th class="w-25">Ammount</th>

                                                    <?php
                                                    include "./connection.php";

                                                    $sql = "SELECT * FROM pos_items";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<tr>';
                                                        echo '<td>' . $row['qty'] . '</td>';
                                                        echo '<td>' . $row['product_name'] . '</td>';
                                                        echo '<td>' . $row['price'] . '.0</td>';
                                                        echo '<td hidden>' . $row['id'] . '</td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>
                                                </table>
                                                <p class="text-center m-0">==================================</p>
                                                <div class="row">
                                                    <p class="col m-0">Total QTY:</p>
                                                    <div class="col"></div>
                                                    <p id="totalQty" class="col-3 m-0">##</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-6 fs-5 fw-bold m-0">AMMOUNT DUE:</p>
                                                    <div class="col"></div>
                                                    <p id="ammountDue" class="col-3 fs-5 fw-bold m-0">##</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col m-0">Cash:</p>
                                                    <div class="col"></div>
                                                    <p id="cash" class="col-3 m-0">##</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col m-0">Change:</p>
                                                    <div class="col"></div>
                                                    <p id="change" class="col-3 m-0">##</p>
                                                </div>
                                                <p class="text-center m-0">==================================</p>
                                                <p class="text-center fs-5 fw-bold m-0">THANK YOU AND COME AGAIN</p>
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="material-symbols-outlined">close</span></button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv()"><span class="material-symbols-outlined"><span class="material-symbols-outlined">print</span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function addBtn() {
                                        if (document.getElementById('name').value == "" || document.getElementById('category').value == "" || document.getElementById('productName').value == "" || document.getElementById('price').value == "" || document.getElementById('qty').value == "") {
                                            alert("Please fill all the inputs");
                                        } else {
                                            var form = document.getElementById('form');
                                            form.action = "add-pos-items.php";
                                            form.submit();
                                        }
                                    }

                                    function clearBtn() {
                                        document.getElementById('name').value = "";
                                        document.getElementById('category').value = "";
                                        document.getElementById('productName').value = "";
                                        document.getElementById('price').value = "";
                                        document.getElementById('qty').value = "";
                                    }

                                    function deleteBtn() {
                                        var id = document.getElementById("id").value;
                                        window.location.href = "delete-pos-item.php?id=" + id;
                                    }

                                    function cashInBtn() {
                                        var galleryModal = new bootstrap.Modal(document.getElementById('cashIn'), {
                                            keyboard: false
                                        });
                                        galleryModal.show();

                                    }

                                    function receipt() {
                                        var totalQty = 0;
                                        var ammountDue = document.getElementById('total').value;
                                        var cash = document.getElementById('cashInput').value;
                                        var change = 0;
                                        if (parseFloat(cash) < parseFloat(ammountDue)) {
                                            alert("Not enough cash ammount");
                                        } else {
                                            change = parseFloat(cash) - parseFloat(ammountDue);

                                            var row = document.getElementById('receiptTable').rows;
                                            for (var i = 1; i < row.length; i++) {
                                                totalQty += parseFloat(row[i].cells[0].textContent);
                                            }

                                            document.getElementById('totalQty').innerText = totalQty;
                                            document.getElementById('ammountDue').innerText = ammountDue;
                                            document.getElementById('cash').innerText = cash;
                                            document.getElementById('change').innerText = change;
                                            var galleryModal = new bootstrap.Modal(document.getElementById('receipt'), {
                                                keyboard: false
                                            });
                                            galleryModal.show();
                                        }
                                    }

                                    function printDiv() {                                        
                                        var divContents = document.getElementById("receipt").innerHTML;
                                        var printWindow = window.open('', '_blank');
                                        printWindow.document.open();
                                        printWindow.document.write('<html><head><title>Print</title></head><body>');
                                        printWindow.document.write(divContents);
                                        printWindow.document.write('</body></html>');
                                        printWindow.document.close();
                                        printWindow.print();
                                        window.location.href = "reset-pos-items.php";
                                    }
                                </script>
                            </form>
                        </div>

                        <div class="col">
                            <div class="form-floating bg-dark p-2 rounded-3">
                                <input type="text" class="form-control px-4 text-end fs-2 fw-bold" id="total" placeholder="" value="0.00">
                                <label for="total" class="fw-bold fs-3">Total:</label>
                            </div>
                            <table class="table table-dark border border-2 w-100 mt-3 border-dark" id="table">
                                <th class="border text-center border-light">Date</th>
                                <th class="border text-center border-light">Product Name</th>
                                <th class="border text-center border-light">Category</th>
                                <th class="border text-center border-light">Qty</th>
                                <th class="border text-center border-light">Ammount</th>


                                <?php
                                include "./connection.php";

                                $sql = "SELECT * FROM pos_items";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr id="row" onclick="rowClick(this)">';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '<td>' . $row['product_name'] . '</td>';
                                    echo '<td>' . $row['category'] . '</td>';
                                    echo '<td>' . $row['qty'] . '</td>';
                                    echo '<td>' . $row['price'] . '.0</td>';
                                    echo '<td hidden>' . $row['id'] . '</td>';
                                    echo '</tr>';
                                }
                                ?>

                            </table>
                            <script>
                                function rowClick(click) {
                                    var date = click.cells[0].textContent;
                                    var productName = click.cells[1].textContent;
                                    var category = click.cells[2].textContent;
                                    var qty = click.cells[3].textContent;
                                    var price = click.cells[4].textContent;
                                    var id = click.cells[5].textContent;

                                    // document.getElementById('productName').value = productName;
                                    document.getElementById('category').value = category;
                                    document.getElementById('price').value = price;
                                    document.getElementById('qty').value = qty;
                                    document.getElementById('id').value = id;

                                    var select = document.getElementById("productName");
                                    var newOption = document.createElement("option");

                                    var optionValue = productName;
                                    var optionText = productName;
                                    newOption.value = productName;
                                    newOption.text = productName;
                                    select.appendChild(newOption);
                                    select.value = optionValue;
                                }
                            </script>
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
    (function() {
        var row = document.getElementById('table').rows;
        var total = 0;
        // alert(parseFloat(row[3].cells[4].textContent));
        for (var i = 1; i < row.length; i++) {
            total += parseFloat(row[i].cells[4].textContent) * parseFloat(row[i].cells[3].textContent);
            // console.log(total.toFixed(2));
        }
        document.getElementById('total').value = total.toFixed(2);
    })();
</script>

</html>