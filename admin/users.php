<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Users</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-white">
    
    <?php require('inc/header.php'); ?>

		<div class="container-fluid" id="main-content">
			<div class="row">
				<div class="col-lg-10 ms-auto p-4 overflow-hidden">
					<h3 class="mb-4">USER MANAGEMENT</h3>

					<div class="card border-0 shadow-sm mb-4">
						<div class="card-body">

							<div class="text-end mb-4">
								<input type="text" class="form-control shadow-none w-25 ms-auto" placeholder="Find User name">
							</div>
							
							<!-- <div class="text-end mb-4">
								<button class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
									<i class="bi bi-plus-square"></i>Add
								</button>	
							</div> -->

							<div class="table-responsive-ld" style="min-height: 1300px">
								<table class="table table-hover border">
									<tr class="bg-dark text-light">
										<th scope="col">#</th>
										<th scope="col">Name</th>
										<th scope="col">Email</th>
										<th scope="col">Phone No</th>
										<th scope="col">Location</th>
										<th scope="col">DOB</th>
										<th scope="col">Verified</th>
										<th scope="col">Status</th>
										<th scope="col">Date</th>
										<th scope="col">Action</th>
									</tr>
									<tbody id="users-data">
									</tbody>
								</table>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		
		

<?php require('inc/scripts.php'); ?>

</body>
</html>