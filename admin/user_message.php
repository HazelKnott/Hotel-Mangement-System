<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

	// if (isset($_GET['seen'])) {
	// 	$frm_data = filteration($_GET);
	// 	if ($frm_data['seen'] == 'all') {
	// 		// Handle 'seen' condition when 'all' is passed
	// 	} else {
	// 		$q = "UPDATE `user_message` SET `seen`=? WHERE `sr_no`=?";
	// 		$values = [1, $frm_data['seen']];
	// 		if (update($q, $values, 'ii')) {
	// 			alert('success', 'Marked as Read');
	// 		} else {
	// 			alert('error', 'Operation Failed');
	// 		}
	// 	}
	// }
	
	if (isset($_GET['del'])) {
        $frm_data = filteration($_GET);
        if ($frm_data['del'] == 'all') {
        } else {
            echo '<script>';
            echo 'if(confirm("Are you sure you want to delete this message?")) {';
            echo '  window.location.href = "?confirmedDel=' . $frm_data['del'] . '";';
            echo '}';
            echo '</script>';
        }
    }


    if (isset($_GET['confirmedDel'])) {
        $q = "DELETE FROM `user_message` WHERE `sr_no`=?";
        $values = [$_GET['confirmedDel']];
        if (delete($q, $values, 'i')) {
            alert('success', 'Deleted.');
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
    <title>Admin Panel - Rooms</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-white">
    
    <?php require('inc/header.php'); ?>

		<div class="container-fluid" id="main-content">
			<div class="row">
				<div class="col-lg-10 ms-auto p-4 overflow-hidden">
					<h3 class="mb-4">MESSAGES</h3>

					<br>
					

					<div class="table-responsive-ld" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Subject</th>
                                        <th scope="col" width="30%">Message</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = "SELECT * FROM `user_message` ORDER BY `sr_no` DESC";
                                    $data = mysqli_query($con, $q);
                                    $i = 1;

                                    while ($row = mysqli_fetch_assoc($data)) {

                                        $seen = 'seen';
                                        if ($row['seen'] != 1) {
                                            $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounder-pill btn-secondary'>Read</a>";
                                        }

                                        $seen = "<a href='?del=$row[sr_no]' class='btn btn-sm rounder-pill btn-danger mt-'>Delete</a>";
                                        echo <<<query
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[email]</td>
                                                <td>$row[subject]</td>
                                                <td>$row[message]</td>
                                                <td>$row[date]</td>
                                                <td>$seen</td>
                                                
                                            </tr>
                                        query;
                                        $i++;
											
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