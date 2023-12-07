<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil Hotel -  Contact Us</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

    <div class="container">
      <div class="row">

        <div class="col-12 my-5 px-4">
          <h2 class="fw-bold">PROFILE</h2>
            <div style="font-size: 14px;">
              <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
              <span class="text-secondary"> > </span>
              <a href="#" class="text-secondary text-decoration-none">PROFILE</a>
            </div>
        </div>

        <div class="col-12 mb-5 px-4">  
          <div class="bg-white p-3 p-md-4 rounded shadow-sm">
            <form>
              <h5 class="mb-3 fw-bold">Basic Information</h5>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label class="form-label">Name</label>
                  <input name="name" type="text" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input name="phonenun" type="number" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input name="dob" type="date" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-12 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none border border-dark" rows="1"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-dark shadow-none">Save Changes</button>
            </form>
          </div>
        </div>

        <div class="col-4 mb-5 px-4">  
          <div class="bg-white p-3 p-md-4 rounded shadow-sm">
            <form>
              <h5 class="mb-3 fw-bold">Picture</h5>
              <img src="" alt="picture">


              <label class="form-label">New Picture</label>
              <input name="pro_pic" type="file" accept=".jpg, .jpeg, .png, .webp" class="mb-4 form-control shadow-none border border-dark">

              <button type="submit" class="btn btn-dark shadow-none">Save Changes</button>
            </form>
          </div>
        </div>

        <div class="col-8 mb-5 px-4">  
          <div class="bg-white p-3 p-md-4 rounded shadow-sm">
            <form>
              <h5 class="mb-3 fw-bold">Change Password</h5>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">New Password</label>
                  <input name="new_pass" type="password" class="form-control shadow-none border border-dark">
                </div>
                <div class="col-md-6 mb-4">
                  <label class="form-label">Confirm Password</label>
                  <input name="confirm_pass" type="password" class="form-control shadow-none border border-dark">
                </div>
              </div>

              <button type="submit" class="btn btn-dark shadow-none">Save Changes</button>
            </form>
          </div>
        </div>

      </div>
    </div>

    



  <?php require('inc/footer.php'); ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
