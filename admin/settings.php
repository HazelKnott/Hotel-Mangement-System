<?php
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-white">
    
    <?php require('inc/header.php'); ?>

	<div class="container-fluid" id="main-content">
		<div class="row">
			<div class="col-lg-10 ms-auto p-4">
				<h4 class="mb-4">SETTINGS</h4>

				<!-- General Settings -->
				<div class="card">
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
						<p class="card-text" id="site_about"></p>
				</div>	
				
				<!-- General Setting Modal -->
				<div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog">
						<form action="">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
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
										<button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn btn-primary">SUBMIT</button>
									</div>
								</div>
							</form>
								
									
							
						</div>
					</div>

					</div>
				</div>
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
		
		xhr.onload = function(){
			general_data = JSON.parse(this.responseText);

			site_title.innerText = general_data.site_title;
			site_about.innerText = general_data.site_about;

			site_title_inp.value = general_data.site_title;
			site_about_inp.value = general_data.site_about;
		}

		xhr.send('get_general');
	}

	function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        console.log(this.responseText);				
				// general_data = JSON.parse(this.responseText);			

				// site_title.innerText = general_data.site_title;					
				// site_about.innerText = general_data.site_about;	
					
				// site_title_inp.value = general_data.site_title;
				// site_about_inp.value = general_data.site_about;
    };

    // Corrected the parameter names and added the missing "&" between the parameters
    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
}


	window.onload = function(){
		get_general();
	}
</script>
</body>
</html>