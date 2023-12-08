<?php
  require('inc/db_config.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil Hotel</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body class="bg-light">
  <?php require('inc/header_index.php') ?>

  <!-- register function -->
  <?php
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

        // $user_query = "SELECT * FROM users WHERE username = '$username'";
        // $user_result = mysqli_query($con, $user_query);

        // if(mysqli_num_rows($user_result)!=0)
        // { 
        //   //need improvement
        //   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //         Username already exist!
        //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //             <span aria-hidden="true">&times;</span>
        //         </button>
        //       </div>';
        // }




        // if($result){
        //     echo 'Data successfully saved.';
        //     // Use single quotes in the console.log argument
        //     echo '<script>';
        //     echo 'console.log("PHP: Data received - ' . $firstname . ' ' . $lastname . '");';
        //     echo '</script>';
        // } else {
        //     echo 'There was an error.';
        // }
    }
?> 
  <!-- Carousel -->
  <div class="d-flex align-items-center">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
        </div>
      </div>
    </div>  
  </div>
  <!-- Check availability form -->
  <!-- <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5>Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label">Check-in</label>
              <input type="date" class="form-control shadow-none border border-dark">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label">Check-out</label>
              <input type="date" class="form-control shadow-none border border-dark">
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label">Adult</label>
              <select class="form-select shadow-none border border-dark">
              <option selected>Choose</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label">Children</label>
              <select class="form-select shadow-none border border-dark">
                <option selected>Choose</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 ps-5 mb-lg-3 mt-2">
              <button type="submit" class="btn btn-light btn-sm ms-2 p-2 btn-outline-dark btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->
  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">
    Our Rooms
  </h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
          <img src="images/rooms/room 101.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Room Name</h5>
            <h6>____ Per Night</h6>
            <div class="feature mt-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Balcony
              </span>
            </div>
            <div class="facilities mt-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Fire
              </span>
            </div>
            <div class="ratings mt-2 mb-3">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-secondary">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex">
              <a href="#" class="btn btn-light btn-sm ms-2 p-2 btn-outline-dark">More Details >>></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
          <img src="images/rooms/room 102.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Room Name</h5>
            <h6>____ Per Night</h6>
            <div class="feature mt-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Balcony
              </span>
            </div>
            <div class="facilities mt-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Fire
              </span>
            </div>
            <div class="ratings mt-2 mb-3">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-secondary">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex">
              <a href="#" class="btn btn-light btn-sm ms-2 p-2 btn-outline-dark">More Details >>></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
          <img src="images/rooms/room 103.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Room Name</h5>
            <h6>____ Per Night</h6>
            <div class="feature mt-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Balcony
              </span>
            </div>
            <div class="facilities mt-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Fire
              </span>
            </div>
            <div class="ratings mt-2 mb-3">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-secondary">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>

            

            <div class="d-flex">
              <a href="#" class="btn btn-light btn-sm ms-2 p-2 btn-outline-dark">More Details >>></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-light btn-sm ms-2 p-2 btn-outline-secondary"> More Rooms</a>
      </div>
    </div>
  </div>
  <!-- Our Facilities -->
  <h2 class="mt-3 pt-4 mb-4 text-center fw-bold">OUR FACILITIES</h2>
  <!-- Must be Hardcoded -->
  <div class="container">
    <div class="row mt-4 pt-4 justify-content-evenly">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities2/breakfast.jpg" alt="...">
        <h5 class="mt-3">Breakfast Buffet</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities2/alchol.jpg" alt="...">
        <h5 class="mt-3">Bar</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities2/pet.jpg" alt="...">
        <h5 class="mt-3">Pet Friendly</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities2/download.jpg" alt="...">
        <h5 class="mt-3">Sauna and Pool</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities2/home gym.jpg" alt="...">
        <h5 class="mt-3">Fitness Center</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="facilities.php" class="btn btn-sm btn-light btn-sm ms-2 p-2 btn-outline-secondary"> More Details</a>
      </div>
    </div>
  </div>
  <!-- Reach Us -->
  <h2 class="mt-5 pt-4 mb-5 text-center fw-bold">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded border border-dark">
        <iframe class="w-100 rounded" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.2563839613304!2d121.0309099!3d14.754580400000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1cc9c9c83e9%3A0x303a03298da24ddb!2sUniversity%20of%20Caloocan%20City%20-%20Congressional%20Campus!5e0!3m2!1sen!2sph!4v1701334532767!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4 mt-4">
        <div class="bg-white p-4 rounded mb-4 border border-dark">
          <h5>
            <i class="bi bi-telephone-fill"> </i>Call Us
          </h5>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">09234567890</a>
         </div>
         <div class="bg-white p-4 rounded mb-4 border border-dark">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"> </i>Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i>Instagram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter"></i> Twitter
            </span>
          </a>
        </div>
      </div>

    </div>
  </div>
  
  <?php require('inc/footer.php') ?>


 <br><br><br>
 <br><br><br>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- <script>
  

  $(function() {
    $('#login').click(function(e) {
      var valid = this.form.checkValidity();

      if (valid) {
        var username = $('#username').val();
        var password = $('#password').val();
      }

      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'jslogin.php',
        data: { username: username, password: password },
        success: function(data) {
          alert(data);
          if ($.trim(data) === '1') {
            setTimeout(function() {
              window.location.href = 'index.php';
            }, 2000);
          }
        },
        error: function(data) {
          alert('There were errors index');
        }
      });
    });
  });
</script> -->

<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });
</script>

</body>
</html>
