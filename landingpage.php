<?php

session_start();
require('inc/db_config.php');
if(isset($_POST['create'])){
 
  $query = "INSERT INTO users (username, firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?, ?)";
  $stmtinsert = $con->prepare($query);

  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];

  $result = $stmtinsert->execute([$username, $firstname, $lastname, $email, $phonenumber, $password]);
  header("Location: index.php");
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmtselect = $con->prepare($query);

    if ($stmtselect) {
        $stmtselect->bind_param('ss', $username, $password);
        $stmtselect->execute();
        $result = $stmtselect->get_result();

        if ($result->num_rows > 0) {
          
            $_SESSION['username'] = $username; 
            $stmtselect->close();
            header("Location: index.php");
            exit();
        } else {
            echo 'Invalid username or password';
        }

        $stmtselect->close();
           } else {
        echo 'Error in preparing the statement';
       }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tranquil Hotel</title>
  <?php require('inc/links.php') ?>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('images/bg.png');
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      overflow-x: hidden;
    }
    
    div.login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }

   .custom-opacity {
    opacity: 85%; 
   }
   .landing-page {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
   }
   .welcome-card {
      max-width: 400px;
      padding: 20px;
      text-align: center;
    }
    
</style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-light custom-opacity">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tranquil Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="d-flex">
        <div>
         <button name="login" type="button" class="btn btn-secondary custom-bg shadow-none mb-1 mr-5" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
         <button name="create" type="button" class="btn btn-secondary custom-bg shadow-none mb-1 ml-1" data-bs-toggle="modal" data-bs-target="#registerModal">REGISTER</button>
        </div>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="welcome-card p-4 mt-4 ml-8 rounded" style="background-color: rgba(255, 255, 255, 0.4); margin-left: 90px;">
        <h1 class="text-white display-3 font-weight-bold text-center">Welcome to Our Hotel!</h1>
        <p class="lead rounded" style="background-color: rgba(255, 255, 255, 0.5); font-size: 16px; text-align: justify;">    Embark on unforgettable adventures with hotel bookings, the cornerstone of travel. From cozy retreats to personalized concierge services, they offer comfort, convenience, and peace of mind. With each reservation, you're not just booking a room; you're unlocking a world of endless possibilities and cherished memories.
        </p>
        <div class="text-center">
          <button class="btn btn-secondary custom-bg shadow-none ">Learn More</button>
        </div>
      </div>
    </div>
  </div>
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
        <form action="loginpage.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control border border-dark" id="username" name="username" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control border border-dark" id="password" name="password">
          </div>
          <div class="mb-5 d-flex justify-content-between align-items-center">
            <button type="submit" name="login" class="btn btn-info text-white">Login</button>
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
              <button name="create" type="submit" class="btn btn-info text-white" href="loginpage.php">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>