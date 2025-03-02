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
            <span>Products -> Categories</span>
            <button><img src="assests/icon/add.png" alt="">Add</button>
            </div>
            <div class="table-container">
                <table class="data-container">
                  <tr>
                    <th>CATEGORY ID</th>
                    <th>CATEGORY NAME</th>
                    
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Soft Drinks</td>
                    <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Energy Drinks</td>
                    <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Juice</td>
                    <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
                  </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>