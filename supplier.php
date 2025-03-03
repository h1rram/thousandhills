<?php
include_once "db/connect.php";

$suppliers = mysqli_query($conn, "SELECT * FROM suppliers");;

if (isset($_POST['AddSupplier'])) {
  $supName = $_POST['supName'];
  $supPhone = $_POST['supPhone'];
  $payTerms = $_POST['payTerms'];

  $newSupplier = mysqli_query($conn, "INSERT INTO suppliers(supplier_name, phone, payment_terms) VALUES('$supName', '$supPhone', '$payTerms')");
  if ($newSupplier) {
    echo '
      <script>
        alert("New Supplier Added!"); 
        window.location.href = "supplier.php"
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
        <span> Inventory -> Suppliers</span>
        <button onclick="openModal()"><img src="assests/icon/add.png" alt="">Add</button>
      </div>
      <div class="table-container">
        <table class="data-container">
          <tr>
            <th>SUPPLIER ID</th>
            <th>SUPPLIER NAME</th>
            <th>SUPPLIER PHONE</th>
            <th>PAYMENT TERMS</th>
          </tr>
          <?php foreach ($suppliers as $row) { ?>
            <tr>
              <td><?= $row['supplier_id'] ?></td>
              <td><?= $row['supplier_name'] ?></td>
              <td><?= $row['phone'] ?></td>
              <td><?= $row['payment_terms'] ?></td>
              <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
  <div class="modalForm" id="NewSupplier">
    <form action="" method="post">
      <h1>New Supplier</h1>
      <div class="field">
        <label>Supplier Name</label>
        <input type="text" name="supName">
      </div>
      <div class="field">
        <label>Supplier Phone</label>
        <input type="tel" name="supPhone">
      </div>
      <div class="field">
        <label>Payment Terms</label>
        <textarea name="payTerms" rows="15"></textarea>
      </div>
      <div class="btns">
        <a onclick="closeModal()" href="javascript:void(0)">Cancel</a>
        <input type="submit" value="Add" name="AddSupplier">
      </div>
    </form>
  </div>
  <script>
    const modal = document.getElementById("NewSupplier");
    const openModal = () => {
      modal.classList.add("showModalForm");
    }
    const closeModal = () => {
      modal.classList.remove("showModalForm");
    };
  </script>
</body>

</html>