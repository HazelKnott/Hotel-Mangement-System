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
                            <!-- Table headers -->
                            <th scope="col">#</th>
                            <th scope="col">User name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        <tbody id="users-data">
                            <?php
                            // Fetch user data from the 'users' table
                            $query = "SELECT * FROM users";
                            $result = mysqli_query($con, $query);
                            $i = 1;

                            // Display user data in the table rows
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $i++ . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phonenumber'] . "</td>";
                                echo "<td>" . $row['status'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td> Actions </td>"; // You can add action buttons here
                                echo "</tr>";
                            }
                            ?>
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