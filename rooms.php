<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil Hotel - Our Rooms</title>
    <?php require('inc/links.php') ?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="css/style.css">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
" rel="stylesheet">
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
"></script>

</head>
<body class="bg-light">

  <?php require('inc/header_index.php') ?>

    <div class="my-5 px-4">
      <h2 class="fw-bold text-center text-decoration-underlin">OUR ROOMS</h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-md-0 mb-4 px-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <g4 class="mt-2">FILTERS</g4>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3 mt-3">
                  <h5 class="mb-3 mt-2 fw-bold" style="font-size: 20px;">CHECK AVAILABILITY</h5>
                  <label class="form-label mt-3">Check-in</label>
                  <input type="date" class="form-control shadow-none">
                  <label class="form-label mt-3">Check-out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="border bg-light p-3 rounded mb-3 mt-3">
                  <h5 class="mb-3 mt-2 fw-bold" style="font-size: 20px;">GUEST</h5>
                  <div class="me-2">
                    <label class="form-label">Adults</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="me-2">
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none">
                  </div>

                </div>
              </div>
            </div>
          </nav>
        </div>

        <div class="col-lg-9 col-md-12 px-4">
          <div class="card mb-3 mb-4 border-0 shadow">
            <div class="row g-0 p-4 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/room 104.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">

                <h5 class="mb-3">Simple Room</h5>
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
                <div class="guest mt-4">
                  <h6 class="mb-1">Guest</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                    4 Children
                  </span>
                </div>

              </div>
              <div class="col-md-2 text-center">
                <div class="card-body">
                  <h6>____ Per Night</h6>
                  <div>
                  <button type="button" class="btn btn-light btn-sm ms-auto p-2 btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#bookingModal">
                   BOOK NOW
                  </button>
                    
                  </div>
                  <!-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 mb-4 border-0 shadow">
            <div class="row g-0 p-4 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/room 105.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">

                <h5 class="mb-3">Simple Room</h5>
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
                <div class="guest mt-4">
                  <h6 class="mb-1">Guest</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                    4 Children
                  </span>
                </div>

              </div>
              <div class="col-md-2 text-center">
                <div class="card-body">
                  <h6>____ Per Night</h6>
                  <div>
                  <button type="button" class="btn btn-light btn-sm ms-auto p-2 btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#bookingModal">
                   BOOK NOW
                  </button>
                  </div>
                  <!-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 mb-4 border-0 shadow">
            <div class="row g-0 p-4 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/room 101.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">

                <h5 class="mb-3">Simple Room</h5>
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
                <div class="guest mt-4">
                  <h6 class="mb-1">Guest</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                    4 Children
                  </span>
                </div>

              </div>
              <div class="col-md-2 text-center">
                <div class="card-body">
                  <h6>____ Per Night</h6>
                  <div>
                  <button type="button" class="btn btn-light btn-sm ms-auto p-2 btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#bookingModal">
                   BOOK NOW
                  </button>
                  </div>
                  <!-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Reservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editBookingForm" method="post">
                    <!-- Customer Name -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName" name="customer_name" placeholder="Customer's Name">
                    </div>

                    <div class="mb-3">
                        <label for="e_mail" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="eMail" name="e_mail" placeholder="Type your Email">
                    </div>

                    <!-- Check-in and Check-out Dates -->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="check_in_date" class="form-label">Check-in Date</label>
                            <input type="date" class="form-control" id="checkInDate" name="check_in_date">
                        </div>
                        <div class="col-md-6">
                            <label for="check_out_date" class="form-label">Check-out Date</label>
                            <input type="date" class="form-control" id="checkOutDate" name="check_out_date">
                        </div>
                    </div>

                    <!-- Number of Guests -->
                    <div class="mb-3">
                        <label for="num_guests" class="form-label">Number of Guests</label>
                        <input type="number" class="form-control" id="guests" name="num_guests" min="1">
                    </div>

                    <!-- Room Type -->
                    <div class="mb-3">
                        <label for="room_id" class="form-label">Room Number</label>
                        <input type="number" class="form-control" id="rooms" name="room_id" min="1">
                    </div>
                    <div class="text-center my-1">
                    <!-- Submit button -->
                    <button name="send" type="submit" class="btn btn-dark btn-outline-light ">Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `bookings`(`customer_name`, `room_id`, `check_in_date`, `check_out_date`, `num_guests` , `e_mail`) VALUES (?,?,?,?,?,?)";
    $stmtinsert = $con->prepare($q);
    $values = [
        $frm_data['customer_name'],
        $frm_data['room_id'],
        $frm_data['check_in_date'],
        $frm_data['check_out_date'],
        $frm_data['num_guests'],
        $frm_data['e_mail']
    ];

    $stmtinsert->execute($values); // Execute the prepared statement directly

    if ($stmtinsert->affected_rows > 0) {
        echo "<script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'success',
                title: 'Booking Successful',
                text: 'Your booking has been successfully completed.'
            });
        </script>";
    } else {
        echo "<script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Booking Failed',
                text: 'Booking failed. Please try again.'
            });
        </script>";
    }
}
  
  
?>

  
  <?php require('inc/footer.php') ?>
  <!-- Scripts -->
  <?php require('inc/scripts.php') ?>
  <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
"></script>


</body>
</html>

