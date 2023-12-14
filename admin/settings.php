<?php
    require('ajax/settings_crud.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-white">
    
    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
          	<div class="col-lg-10 ms-auto p-4">
                <h4 class="mb-4">SETTINGS</h4>

                <!-- General Settings -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark text-light" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"> </i>Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"> </p>
					</div>
                </div>	
                <!-- Shutdown Setting Section -->
								
				<div class="card border-0 shadow-sm mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title">Shutdown Website</h5>
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
												<label class="form-check-label" for="flexSwitchCheckDefault"></label>
											</div>
                  </div>
										<p class="card-text">
											Our website will be shutdown
										</p>	
                </div>
								
								<br>

								<!-- Contact Us Setting section -->
				<div class="card border-0 shadow-sm mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0">Contact Settings</h5>
                      <button type="button" class="btn btn-dark text-light" data-bs-toggle="modal" data-bs-target="#contacts-s">
                        <i class="bi bi-pencil-square"> </i>Edit
                      </button>
                    </div>
										<div class="row">
											<div class="col-lg-6">
												<div class="mb-4">
													<h6 class="card-subtitle mb-1 fw-bold">Address Title</h6>
													<p class="card-text" id="address"></p>
												</div>
												<div class="mb-4">
													<h6 class="card-subtitle mb-1 fw-bold">Google Maps</h6>
													<p class="card-text" id="gmap"></p>
												</div>
												<div class="mb-4">
													<h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
													<p class="card-text mb-1">
														<i class="bi bi-telephone-fill"></i>
														<span id="pn1"></span>
													</p>
												</div>
												<div class="mb-4">
													<h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
													<p class="card-text" id="email"></p>
												</div>
												
											</div>
											<div class="col-lg-6">
												<div class="mb-4">
													<h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
													<p class="card-text mb-1">
														<i class="bi bi-facebook me-1"></i>
														<span id="pn1"></span>
													</p>
													<p class="card-text mb-1">
														<i class="bi bi-instagram me-1"></i>
														<span id="pn1"></span>
													</p>
												</div>
												<div class="mb-4">
													<h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
													<iframe id="iframe" class="border border-dark p-2 w-100" loading="lazy"></iframe>
												</div>
											</div>
										</div>
									</div>																					
                </div>

                <!-- General Setting Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">General Settings</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Site Title</label>
                                            <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">About Us</label>
                                            <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea>
                                        </div>		
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                        <button type="submit" onclick="upd_general(site_title.value,site_about.value)" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                                
                                    
                            
                        </div>
                    </div>

                    </div>
                </div>

								<!-- Contact Setting Modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Contact Settings</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container-fluid p-0">
																				<div class="row">
																					<div class="col-md-6">
																						<div class="mb-3">
																								<label class="form-label fw-bold">Address</label>
																								<input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
																						</div>
																						<div class="mb-3">
																								<label class="form-label fw-bold">Google Map Link</label>
																								<input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
																						</div>
																						<div class="mb-3">
																								<label class="form-label fw-bold">Phone Numbers</label>
																								<div class="input-group mb-3">
																									<span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
																									<input type="text" class="form-control shadow-none">
																								</div>
																								<div class="input-group mb-3">
																									<span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
																									<input type="text" class="form-control shadow-none">
																								</div>
																						</div>
																						<div class="mb-3">
																								<label class="form-label fw-bold">Email</label>
																								<input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="mb-3">
																							<label class="form-label fw-bold">Social Links</label>
																							<div class="input-group mb-3">
																								<span class="input-group-text"><i class="bi bi-facebook"></i></span>
																								<input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
																							</div>
																							<div class="input-group mb-3">
																								<span class="input-group-text"><i class="bi bi-instagram"></i></span>
																								<input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
																							</div>
																							<div class="input-group mb-3">
																								<span class="input-group-text"><i class="bi bi-twitter"></i></span>
																								<input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
																							</div>
																							<div class="mb-3">
																								<label class="form-label fw-bold">iFrame Src</label>
																								<input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none border border-dark" required>
																						</div>
																						</div>
																					</div>
																				</div>
																			</div>
                                </div>
                            </form>
                                
														
                            
                        </div>
                    </div>

                    </div>
                </div>


								<!-- <div class="card border-0 ahadow-sm">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb 3">
											<h5 class="card-title m-0">Shutdown Website</h5>
										</div>
										<p class="card-text">
											No customers will be allowed to book hotel room, because we shutdown
										</p>
									</div>
								</div> -->

                
            </div>
        </div>
    </div>
        
<?php require('inc/scripts.php'); ?>
<script>
    let general_data;

    function get_general()
    {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function() {
        console.log('Response received:', this.responseText);

        try {
            general_data = JSON.parse(this.responseText);

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

            console.log('Data successfully parsed and updated.');
        } catch (error) {
            console.error('Error parsing JSON:', error);
        }
        };

        xhr.send('get_general');
    }

    function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {

        var myModalEl = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        console.log(this.responseText);				
        
        if(this.responseText == 1){
            alert('success', 'Changes saved');
            get_general();
        }
        else{
            alert('error', 'Something wrong your data is not saved');
        }

    };

    // Corrected the parameter names and added the missing "&" between the parameters
    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');

    window.onload = function(){
        get_general();
    };
    }
 
</script>

<script>
  function updateContactSettings() {
    let address = document.getElementById('address_inp').value;
    let gmap = document.getElementById('gmap_inp').value;
    let email = document.getElementById('email_inp').value;
    // ... gather other contact settings data similarly

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "contact.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      if (this.responseText === 'success') {
        alert('Contact settings updated successfully');
        // Optionally, update the UI or do something upon successful update
      } else {
        alert('Error updating contact settings');
      }
    };

    xhr.send('address=' + address + '&gmap=' + gmap + '&email=' + email + '&update_contact_settings');
  }

  // Event listener for modal submit button
  document.getElementById('submit_contact_settings').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
    updateContactSettings(); // Call the function to update contact settings
  });
</script>
</body>
</html>