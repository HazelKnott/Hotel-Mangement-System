<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotel -  Contact Us</title>
    <?php require('inc/links.php') ?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="css/style.css">
    
</head>
<body class="bg-light">

  <?php require('inc/header.php') ?>

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
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
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
                  <a href="#" class="btn btn-primary mt-2">Book Now</a>
                    <!-- <a href="#" class="btn btn-primary mt-2">More Details >>></a> -->
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
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
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
                  <a href="#" class="btn btn-primary mt-2">Book Now</a>
                    <!-- <a href="#" class="btn btn-primary mt-2">More Details >>></a> -->
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
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
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
                  <a href="#" class="btn btn-primary mt-2">Book Now</a>
                    <!-- <a href="#" class="btn btn-primary mt-2">More Details >>></a> -->
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

  <?php require('inc/footer.php') ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>