<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

    $results_per_page = 10;
    $page = 1; // Default starting page

    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    }

    $start_index = ($page - 1) * $results_per_page;

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require 'inc/PHPMailer/Exception.php';
    // require 'inc/PHPMailer/PHPMailer.php';
    // require 'inc/PHPMailer/SMTP.php';

    if(isset($_POST['delete_user'])) {
        $booking_id = $_POST['booking_id'];

        // Perform delete operation here using booking_id
        $query = "DELETE FROM bookings WHERE booking_id = $booking_id";
        $delete_result = mysqli_query($con, $query);

        // Check for errors in the execution
        if ($delete_result === false) {
            echo "Error: " . mysqli_error($con);
            // Additional error handling if needed
        }

        // Check if delete was successful
        if($delete_result) {
            alert('success', 'Deleted.');
        } else {
            alert('error', 'Operation Failed');
        }
    }


    if(isset($_POST['send_status'])) {
        $booking_id = $_POST['booking_id'];
        $selected_status = $_POST['selected_status'];

        // Perform status update operation
        $update_query = "UPDATE bookings SET booking_status = '$selected_status' WHERE booking_id = $booking_id";
        $update_result = mysqli_query($con, $update_query);

        // Check if update was successful
        if($update_result) {
            alert('success', 'Status updated.');
        } else {
            alert('error', 'Failed to update status.');
        }
    }

    // if(isset($_POST['send_email'])) {
    //     $booking_id = $_POST['booking_id'];

    //     $query = "SELECT * FROM bookings WHERE booking_id = $booking_id";
    //     $result = mysqli_query($con, $query);

    //     if ($result && mysqli_num_rows($result) > 0) {
    //         $booking_details = mysqli_fetch_assoc($result);
    //         $recipient_email = $booking_details['e_mail'];

    //         $status = $booking_details['booking_status'];

    //         // Email content
    //         $subject = "Room Reservation Status Update";
    //         $message = "Your room reservation status is: $status";

    //         // Create a new PHPMailer instance
    //         $mail = new PHPMailer();

    //         // Set SMTP settings
    //         $mail->isSMTP();
    //         $mail->Host = 'smtp.gmail.com';
    //         $mail->SMTPAuth = true;
    //         $mail->Username = 'lobenaria.hazejade.bscs2021@gmail.com'; // Your Gmail address
    //         $mail->Password = 'hazeljade173'; // Your Gmail password or App password if 2-step verification is enabled
    //         $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    //         $mail->Port = 587; // TCP port to connect to

    //         // Email content
    //         $mail->setFrom('lobenaria.hazejade.bscs2021@gmail.com', 'Hazel Jade LObenaria');
    //         $mail->addAddress($recipient_email);
    //         $mail->Subject = $subject;
    //         $mail->Body = $message;

    //         // Send email
    //         if ($mail->send()) {
    //             alert('success', 'Email sent successfully.');
    //         } else {
    //             echo 'Mailer Error: ' . $mail->ErrorInfo;
    //         }            
    //    }
    // } 

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
					<h3 class="mb-4">ROOM RESERVATIONS</h3>

					<div class="card border-0 shadow-sm mb-4">
						<div class="card-body">

							<!-- <div class="text-end mb-4">
								<input type="text" class="form-control shadow-none w-25 ms-auto" placeholder="Find User name">
							</div> -->
							
							<!-- <div class="text-end mb-4">
								<button class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
									<i class="bi bi-plus-square"></i>Add
								</button>	
							</div> -->

                            <div class="table-responsive-ld" style="min-height: 1300px">
                    <table class="table table-hover border">
                        <tr class="bg-dark text-light">
                            <!-- Table headers -->
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Customer Name</th>
                            <th scope="col" class="text-center">Room Number</th>
                            <th scope="col" class="text-center">Check-In Date</th>
                            <th scope="col"class="text-center"> Check-Out Date</th>
                            <th scope="col" class="text-center">Number of Guests</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" width="30%" class="text-center">Action</th>
                        </tr>
                        <tbody id="users-data">
                            <?php
                             $query = "SELECT * FROM bookings";
                             $result = mysqli_query($con, $query);
                             $i = 1;
                     
                             while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $i++ . "</td>";
                                echo "<td>" . $row['customer_name'] . "</td>";
                                echo "<td>" . $row['room_id'] . "</td>";
                                echo "<td>" . $row['check_in_date'] . "</td>";
                                echo "<td>" . $row['check_out_date'] . "</td>";
                                echo "<td>" . $row['num_guests'] . "</td>";
                                echo "<td>" . $row['booking_status'] . "</td>";
                    
                                echo "<td>";
                                echo '<form method="POST" action="">';
                                echo '<input type="hidden" name="booking_id" value="' . $row['booking_id'] . '">';
                    
                                // Delete button
                                echo '<button type="submit" name="delete_user" class="btn btn-danger btn-sm ms-2">Delete</button>';
                    
                                // Dropdown for selecting status
                                echo '<select name="selected_status" class="ms-2 p-1 mt-1">';
                                echo '<option value="Pending">Pending</option>';
                                echo '<option value="Confirmed">Confirmed</option>';
                                echo '</select>';
                                
                    
                                // Send status button
                                echo '<button type="submit" name="send_status" class="btn btn-primary btn-sm mt-2 ms-3 mb-2">Update Status</button>';

                                echo '<button type="submit" name="send_email" class="btn btn-primary btn-m mt-2 ms-5">Send Status Email</button>';
                    
                                echo '</form>';
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <?php
                        // Count total number of rows
                        $count_query = "SELECT COUNT(*) AS total FROM users";
                        $count_result = mysqli_query($con, $count_query);
                        $row = mysqli_fetch_assoc($count_result);
                        $total_pages = ceil($row['total'] / $results_per_page);

                        // Display pagination links
                        for ($page = 1; $page <= $total_pages; $page++) {
                            echo '<a href="?page=' . $page . '" class="btn btn-primary btn-sm m-1">' . $page . '</a>';
                        }
                        ?>
                </div>

						</div>
					</div>

				</div>
			</div>
		</div>
		
		

<?php require('inc/scripts.php'); ?>

</body>
</html>