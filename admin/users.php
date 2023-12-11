<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

    if(isset($_POST['delete_user'])) {
        $user_id = $_POST['user_id'];

        // Perform delete operation here using user_id
        $query = "DELETE FROM users WHERE id = $user_id";
        $delete_result = mysqli_query($con, $query);

        // Check if delete was successful
        if($delete_result) {
            alert('success', 'Deleted.');
        } else {
            alert('error', 'Operation Failed');
        }
    }

    if(isset($_POST['update_status'])) {
        $user_id = $_POST['user_id'];
        $new_status = $_POST['new_status'];

        // Perform status update operation here using user_id and new_status
        $update_query = "UPDATE users SET status = '$new_status' WHERE id = $user_id";
        $update_result = mysqli_query($con, $update_query);

        // Check if update was successful
        if($update_result) {
            alert('success', 'Updated');
        } else {
            alert('error', 'Operation Failed');
        }
    }
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
                            <th scope="col"class="text-center">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col" width="20%" class="text-center">Action</th>
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
                                echo "<td>";
                                echo '<form method="POST" action="">';
                                echo '<input type="hidden" name="user_id" value="' . $row['id'] . '">';
        
                                // Delete button
                                echo '<button type="submit" name="delete_user" class="btn btn-danger btn-sm ms-2">Delete</button>';
        
                                // Update status dropdown
                                echo '<select class="ms-2" name="new_status">';
                                echo '<option value="Active">Active</option>';
                                echo '<option value="Inactive">Inactive</option>';
                                echo '</select>';
        
                                // Update status button
                                echo '<button href="user.php" type="submit" name="update_status" class="btn btn-primary btn-sm mt-2 ms-4">Update Status</button>';
                                echo '</form>';
                                echo "</td>";
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