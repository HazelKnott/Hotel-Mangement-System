<?php
  require('inc/db_config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php require('inc/links.php') ?>
  <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">

<?php
    
    if (isset($_POST['login'])) {
        // Assuming you have a database connection object $con
        // Make sure to replace 'your_table_name' with the actual table name
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmtselect = $con->prepare($query);
    
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $stmtselect->bind_param('ss', $username, $password); // Assuming both username and password are strings
    
        $stmtselect->execute();
        $stmtselect->store_result();
    
        if ($stmtselect->num_rows > 0) {
            // Login successful
            echo '1';
            header("Location: index.php");
        } else {
            // Login failed
            echo 'Invalid username or password';
        }
        
        $stmtselect->close();

    }
    
    if(isset($_POST['create'])){
        // Assuming you have a database connection object $con
        // Make sure to replace 'your_table_name' with the actual table name
        $query = "INSERT INTO users (username, firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtinsert = $con->prepare($query);

        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];

        $result = $stmtinsert->execute([$username, $firstname, $lastname, $email, $phonenumber, $password]);

    }
?> 
    <!-- fix the redirecting issue -->


    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">LOGIN</h4>
            <div class="mb-3 px-2">
                <button name="login" type="button" class="btn btn-danger custom-bg shadow-none mb-3 " data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
            </div>
            <div class="mb-4 px-2">
                 <button name="create" type="button" class="btn btn-danger custom-bg shadow-none mb-3 " data-bs-toggle="modal" data-bs-target="#registerModal">REGISTER</button>
            </div>
        </form>
    </div>

    

    <!-- Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
            <i class="bi bi-person-circle fs-3- me-2"></i> User Login </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control border border-dark" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control border border-dark" id="password" name="password">
            </div>
            <div class="mb-5 d-flex justify-content-between align-items-center">
              <button type="submit" name="login" class="btn btn-primary">Login</button>
              <a href="javascript: void(0)">Forgot Password</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
            <i class="bi bi-person-vcard fs-3- me-2"></i> User Registration </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="post">
            <span class="badge rounded-pill text-bg-light text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nam.</span>
            <div class="container-fluid">
              <div class="row">   
                <!-- name, email, phone num, picture, address, date of birth, password, confirm pasword  -->
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label for="username" class="form-label">Username</label>
                  <input name="username" type="text" class="form-control shadow-none border border-dark" required>
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label for="firstname" class="form-label">First name</label>
                  <input name="firstname" type="text" class="form-control shadow-none border border-dark" required>
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label for="lastname" class="form-label">Last name</label>
                  <input name="lastname" type="text" class="form-control shadow-none border border-dark" required>
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label for="email" class="form-label">E-mail</label>
                  <input name="email" type="email" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label for="phonenumber" class="form-label">Phone Number</label>
                  <input name="phonenumber" type="number" class="form-control shadow-none border border-dark" required>
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label for="password" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control shadow-none border border-dark" required>
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button name="create" type="submit" class="btn btn-primary" href="loginpage.php">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>