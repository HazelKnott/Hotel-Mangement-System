<?php
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Tranquil Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-2 bd-highlight me-3" aria-current="page" href="index.php">Homepage</a>
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
          <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control border border-dark" id="exampleInputPassword1">
            </div>
            <div class="mb-5 d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-light btn-sm ms-2 p-2 btn-outline-secondary">Login</button>
              <a href="javascript: void(0)" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Forgot Password</a>
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
          <form id="register-form">
            <span class="badge rounded-pill text-bg-light text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nam.</span>
            <div class="container-fluid">
              <div class="row">   
                <!-- name, email, phone num, picture, address, date of birth, password, confirm pasword  -->
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label class="form-label">Name</label>
                  <input name="name" type="text" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input name="email" type="email" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label class="form-label">Phone Number</label>
                  <input name="phonenum" type="number" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input name="profile" type="file" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label class="form-label">Address</label>
                  <textarea name="address" class="form-control shadow-none border border-dark" rows="1"></textarea>
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input name="dob" type="date" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3 pe-2">
                  <label class="form-label">Password</label>
                  <input name="pass" type="password" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input name="cpass" type="password" class="form-control shadow-none border border-dark">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-light btn-sm ms-2 p-2 btn-outline-secondary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>