

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Tranquil Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active p-2 bd-highlight me-3" aria-current="page" href="index.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" href="about.php">About Us</a>
          </li>
        </ul>
        <button type="button" class="btn btn-light btn-sm ms-auto p-2 btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">
          LOGIN
        </button>
        <button type="button" class="btn btn-light btn-sm ms-2 p-2 btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#registerModal">
          REGISTER
        </button>
    </div>
  </div>
</nav>

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
              <button name="create" type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>