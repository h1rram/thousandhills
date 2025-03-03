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
            <td>3</td>
            <td>Blarirwa Ltd</td>
            <td>Fanta</td>
            <td>20</td>
            <td>2000</td>
            <td>800</td>
            <td>20/3/2025</td>
            <td><button><img src="assests/icon/export.png" alt="" class="edit-icon">Export</button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="modalForm" id="NewStockin">
    <form action="" method="post">
      <h1>New Purchase</h1>
      <strong>Supplier Details</strong>
      <div class="field">
        <label>Supplier</label>
        <select name="supId">
          <option selected value="1">Bralirwa</option>
        </select>
      </div>
      <strong>Purchase Details</strong>
      <div class="many">
        <div class="field">
          <label>Supplier</label>
          <select name="supId">
            <option selected value="1">Bralirwa</option>
          </select>
        </div>
        <div class="field">
          <label>Quantity</label>
          <input type="number" name="quantity">
        </div>
        <div class="field">
          <label>Unit Price</label>
          <input type="number" name="unitPrice">
        </div>
        <div class="field">
          <label>Selling Price</label>
          <input type="number" name="sellingPrice">
        </div>
      </div>
      <div class="field">
        <label>Expiring Date</label>
        <input type="date" name="expDate">
      </div>
      <div class="summary">
        <strong>Pricing</strong>
        <div class="field">
          <label>Amount to be paid:</label>
          <span>RWF 0.00 </span>
        </div>
      </div>
      <div class="btns">
        <a href="javascript:void(0)">Cancel</a>
        <input type="submit" value="Save" name="AddStockin">
      </div>
    </form>
  </div>
  <script>
    const modal = document.getElementById("NewStockin");
    const openModal = () => {
      modal.classList.add("showModalForm");
    }
    const closeModal = () => {
      modal.classList.remove("showModalForm");
    };
  </script>
</body>

</html>