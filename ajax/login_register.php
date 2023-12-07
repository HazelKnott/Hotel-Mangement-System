<?php

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');
adminLogin();

// Check if the 'register' key is set in the POST request
if (isset($_POST['register'])) {
    $data = filteration($_POST);

    // Match password and confirm password
    if ($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    // Check if user exists
    $u_exist = select("SELECT * FROM `users` WHERE `email` = ? OR `phonenum` = ? LIMIT 1", [$data['email'], $data['phonenum']], "ss");

    if (mysqli_num_rows($u_exist) != 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        if ($u_exist_fetch['email'] == $data['email']) {
            echo 'email_already';
        } else {
            echo 'phone_already';
        }
        exit;
    }

    // Upload user image to the server
    $img = uploadUserImage($_FILES['profile']);

    if ($img == 'inv_img') {
        echo 'inv_img';
        exit;
    } elseif ($img == 'upd_failed') {
        echo 'upd_failed';
        exit;
    }

    // Send confirmation link to user's email
    $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

    $query = "INSERT INTO `user_cred` (`name`, `email`, `address`, `phonenum`, `dob`, `profile`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Check the correct function and argument placements
    if (insert($query, [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['dob'], $img, $enc_pass], "sssssss")) {
        echo '1';
    } else {
        echo 'ins_failed';
    }
}
?>
