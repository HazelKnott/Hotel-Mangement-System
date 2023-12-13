<?php
    require('inc/essentials.php');
	require('inc/db_config.php');
    adminLogin();

	$bookingsCount = 0; // Initialize the count to 0
    $queryBookings = "SELECT COUNT(*) as total_bookings FROM bookings";
    $resultBookings = mysqli_query($con, $queryBookings);

    if ($resultBookings) {
        $rowBookings = mysqli_fetch_assoc($resultBookings);
        $bookingsCount = $rowBookings['total_bookings'];
    }

    // Count rows for 'refunds'
    $refundsCount = 0; // Initialize the count to 0
    $queryRefunds = "SELECT COUNT(*) as total_refunds FROM refunds";
    $resultRefunds = mysqli_query($con, $queryRefunds);

    if ($resultRefunds) {
        $rowRefunds = mysqli_fetch_assoc($resultRefunds);
        $refundsCount = $rowRefunds['total_refunds'];
    }

    // Count rows for 'user_message'
    $userQueriesCount = 0; // Initialize the count to 0
    $queryUserQueries = "SELECT COUNT(*) as total_user_queries FROM user_message";
    $resultUserQueries = mysqli_query($con, $queryUserQueries);

    if ($resultUserQueries) {
        $rowUserQueries = mysqli_fetch_assoc($resultUserQueries);
        $userQueriesCount = $rowUserQueries['total_user_queries'];
    }
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
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <div class="row justify-content-evenly">
					 <h3>DASHBOARD</h3>
					 <!-- <h6 class="badge bd-sm bg-danger py-2 px-3">Shutdown mode is Active</h6> -->
                    <div class="col-md-3 mb-4">
                        <a href="" class="text-decoration-none">
                            <div class="card text-center text-success p-3">
                                <h6>New Bookings</h6>
                                <h1 class="mt-2 mb-0"><?php echo $bookingsCount; ?></h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="" class="text-decoration-none">
                            <div class="card text-center text-warning p-3">
                                <h6>Refund Bookings</h6>
                                <h1 class="mt-2 mb-0"><?php echo $refundsCount; ?></h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="" class="text-decoration-none">
                            <div class="card text-center text-info p-3">
                                <h6>User Queries</h6>
                                <h1 class="mt-2 mb-0"><?php echo $userQueriesCount; ?></h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
<?php require('inc/scripts.php'); ?>
</body>
</html>