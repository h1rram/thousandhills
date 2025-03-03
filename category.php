<?php
include_once "db/connect.php";

$categories = mysqli_query($conn, "SELECT * FROM categories");;

if (isset($_POST['AddCategory'])) {
  $cName = $_POST['cName'];

  $newCategory = mysqli_query($conn, "INSERT INTO categories(category_name) VALUES('$cName')");
  if ($newCategory) {
    echo '
      <script>
        alert("New Category Added!"); 
        window.location.href = "category.php"
      </script>
    ';
  }
}

?>
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
        <button onclick="openModal()"><img src="assests/icon/add.png" alt="">Add</button>
      </div>
      <div class="table-container">
        <table class="data-container">
          <tr>
            <th>CATEGORY ID</th>
            <th>CATEGORY NAME</th>

          </tr>
          <?php foreach ($categories as $row) { ?>
            <tr>
              <td><?= $row['category_id'] ?></td>
              <td><?= $row['category_name'] ?></td>
              <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
  <div class="modalForm" id="NewCategory">
    <form action="" method="post">
      <h1>New Category</h1>
      <div class="field">
        <label>Category Name</label>
        <input type="text" name="cName">
      </div>
      <div class="btns">
        <a onclick="closeModal()" href="javascript:void(0)">Cancel</a>
        <input type="submit" value="Add" name="AddCategory">
      </div>
    </form>
  </div>
  <script>
    const modal = document.getElementById("NewCategory");
    const openModal = () => {
      modal.classList.add("showModalForm");
    }
    const closeModal = () => {
      modal.classList.remove("showModalForm");
    };
  </script>
</body>

</html>