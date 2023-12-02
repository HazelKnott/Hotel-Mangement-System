<?php
	require('inc/essentials.php');
	require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php') ?>
		<style>
			div.login-form{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				width: 400px;
			}
		</style>
</head>
<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
						<div class="mb-3 px-2">
							<input name="admin_name" require type="text" class="form-control shadow-none text-center" placeholder="Username">
						</div>
						<div class="mb-4 px-2">
							<input name="admin_pass" require type="password" class="form-control shadow-none text-center" placeholder="Password">
						</div>
						<button name="login" type="submit" class="btn btn-danger custom-bg shadow-none mb-3">LOGIN</button>
        </form>
    </div>









		<?php

			if(isset($_POST['login'])) {
				$frm_data = filteration($_POST);

				$query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
				$values = [$frm_data['admin_name'], $frm_data['admin_pass']];

				// Assuming your select function is correctly implemented and returns a mysqli_result object
				$res = select($query, $values, "ss");

				if ($res->num_rows == 1) {
						$row = mysqli_fetch_assoc($res);
						session_start();
						$_SESSION['adminLogin'] = true;
						$_SESSION['adminId'] = $row['id_no'];
						redirect('dashboard.php');
				} else {
						alert('error','Login failed - Invalid Credentials!');
				}
			}

		?>

    <?php require('inc/scripts.php') ?>
</body>
</html>