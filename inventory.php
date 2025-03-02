<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Thousand Hills Bar</title>
</head>

<body>
<div class="mainEmp-container">
        <div class="nav-bar">
            <div class="header-nav">
                <img src="assests/icon/logo.png" alt="" id="logo">
                <h1 id="logo-text">Thousand Hills</h1>
                <div class="close-button">
                <a href="#"><img src="assests/icon/close.png" alt="" id="close-button"></a>
                </div>
            </div>
            <hr>
            <h5>General</h5>
            <div class="nav-container">
                <ul class="navs">
                    <li><a href="#"><img src="assests/icon/dashboard-bar.png" alt="" class="nav-icon">Dashboard</a></li>
                    <li><a href="employee.php"><img src="assests/icon/employee.png" alt="" class="nav-icon">Employees</a></li>
                    <li><a href="customer.php"><img src="assests/icon/customer.png" alt="" class="nav-icon">Customers</a></li>
                    <li><a href="product.php"><img src="assests/icon/product.png" alt="" class="nav-icon">Products</a></li>
                    <li><a href="inventory.php"><img src="assests/icon/inventory.png" alt="" class="nav-icon">Inventory</a></li>
                    <li><a href="orders.php"><img src="assests/icon/cart.png" alt="" class="nav-icon">orders</a></li>
                </ul>
            </div>
        </div>
        <div class="side-content">
            <div class="sideheader-content">
            <span>Inventory</span>
            <div class="two-buttons">
            <a href="supplier.php"><button><img src="assests/icon/delivery.png" alt="">Supplier</button></a>
            <button><img src="assests/icon/add.png" alt="">Add</button>
            </div>
            </div>
            <div class="table-container">
                <table class="data-container">
                  <tr>
                    <th>STOCKIN ID</th>
                    <th>SUPPLIER</th>
                    <th>PRODUCT</th>
                    <th>QUANTITY</th>
                    <th>UNIT PRICE</th>
                    <th>SELLING PRICE</th>
                    <th>EXPIRING DATE</th>
                </tr>
                  <tr>
                    <td>1</td>
                    <td>Blarirwa Ltd</td>
                    <td>Henessy</td>
                    <td>20</td>
                    <td>2000</td>
                    <td>4000</td>
                    <td>20/3/2025</td>
                    <td><button><img src="assests/icon/export.png" alt="" class="edit-icon">Export</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Mutzing Ltd</td>
                    <td>Mutzing</td>
                    <td>20</td>
                    <td>2000</td>
                    <td>4000</td>
                    <td>20/3/2025</td>
                    <td><button><img src="assests/icon/export.png" alt="" class="edit-icon">Export</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Blarirwa Ltd</td>
                    <td>Fanta</td>
                    <td>20</td>
                    <td>2000</td>
                    <td>800</td>
                    <td>20/3/2025</td>
                    <td><button><img src="assests/icon/export.png" alt="" class="edit-icon">Export</button></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Blarirwa Ltd</td>
                    <td>PRIMUS</td>
                    <td>5</td>
                    <td>1000</td>
                    <td>2000</td>
                    <td>20/3/2025</td>
                    <td><button><img src="assests/icon/export.png" alt="" class="edit-icon">Export</button></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>SKOL Ltd</td>
                    <td>Panache</td>
                    <td>20</td>
                    <td>2000</td>
                    <td>700</td>
                    <td>20/3/2025</td>
                    <td><button><img src="assests/icon/export.png" alt="" class="edit-icon">Export</button></td>
                  </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>