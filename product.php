<?php
include_once "db/connect.php";

$products = mysqli_query($conn, "SELECT * FROM products");;

if (isset($_POST['AddProduct'])) {
  $pName = $_POST['pName'];
  $pCategoryId = $_POST['pCategoryId'];

  $newProduct = mysqli_query($conn, "INSERT INTO products(product_name,category_id) VALUES('$pName', '$pCategoryId')");
  if ($newProduct) {
    echo '
      <script>
        alert("New Product Added!"); 
        window.location.href = "product.php"
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
        <span>Products</span>
        <div class="two-buttons">
          <a href="category.php"><button><img src="assests/icon/category.png" alt="">Category</button></a>
          <button onclick="openModal()"><img src="assests/icon/add.png" alt="">Add</button>
        </div>
      </div>
      <div class="table-container">
        <table class="data-container">
          <tr>
            <th>PRODUCT ID</th>
            <th>CATEGORY</th>
            <th>PRODUCT NAME</th>
          </tr>
          <?php foreach ($products as $row) {
            $id = $row['category_id'];
            $category = mysqli_fetch_assoc(mysqli_query($conn, "SELECT category_name FROM categories WHERE category_id = '$id'"));
            $categoryName = $category['category_name']
          ?>
            <tr>
              <td><?= $row['product_id'] ?></td>
              <td><?= $categoryName ?></td>
              <td><?= $row['product_name'] ?></td>
              <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
  <div class="modalForm" id="NewProduct">
    <form action="" method="post">
      <h1>New Product</h1>
      <div class="field">
        <label>Product Name</label>
        <input type="text" name="pName">
      </div>
      <div class="field">
        <label>Product Category</label>
        <select name="pCategoryId">
          <?php
          $categories = mysqli_query($conn, "SELECT category_id,category_name FROM categories");
          foreach ($categories as $categoryRow) {
          ?>
            <option value="<?= $categoryRow['category_id'] ?>"><?= $categoryRow['category_name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="btns">
        <a onclick="closeModal()" href="javascript:void(0)">Cancel</a>
        <input type="submit" value="Add" name="AddProduct">
      </div>
    </form>
  </div>
  <script>
    const modal = document.getElementById("NewProduct");
    const openModal = () => {
      modal.classList.add("showModalForm");
    }
    const closeModal = () => {
      modal.classList.remove("showModalForm");
    };
  </script>
</body>

</html>