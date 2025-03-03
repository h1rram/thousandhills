<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thousand Hills Bar</title>
  <link rel="stylesheet" href="styles/style.css">
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
        <span>Employees</span>
        <button onclick="openModal()"><img src="assests/icon/add.png" alt="">Add</button>
      </div>
      <div class="table-container">
        <table class="data-container">
          <tr>
            <th>EMPLOYEE ID</th>
            <th>EMPLOYEE NAME</th>
            <th>EMPLOYEE PHONE</th>
            <th>EMPLOYEE ROLE</th>
          </tr>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>+250 781 123 456</td>
            <td>Waiter</td>
            <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Eleanor Vance</td>
            <td>+250 782 987 654</td>
            <td>Bartender</td>
            <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jasper Thorne</td>
            <td>+250 783 555 121</td>
            <td>Waiter</td>
            <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Aria Sterling</td>
            <td>+250 788 321 789</td>
            <td>Bartender</td>
            <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Seraphina Hayes</td>
            <td>+250 781 123 456</td>
            <td>Waiter</td>
            <td><button><img src="assests/icon/edit.png" alt="" class="edit-icon">Edit</button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="modalForm" id="NewEmployee">
    <form action="" method="post">
      <h1>New Employee</h1>
      <div class="field">
        <label>Employee Name</label>
        <input type="text" name="empName">
      </div>
      <div class="field">
        <label>Employee Role</label>
        <select name="empRole">
          <option selected value="waiter">Waiter</option>
          <option value="manager">Manager</option>
        </select>
      </div>
      <div class="field">
        <label>Employee Phone</label>
        <input type="tel" name="empPhone">
      </div>
      <div class="btns">
        <a onclick="closeModal()" href="javascript:void(0)">Cancel</a>
        <input type="submit" value="Add" name="AddEmployee">
      </div>
    </form>
  </div>
  <script>
    const modal = document.getElementById("NewEmployee");
    const openModal = () => {
      modal.classList.add("showModalForm");
    }
    const closeModal = () => {
      modal.classList.remove("showModalForm");
    };
  </script>
</body>

</html>