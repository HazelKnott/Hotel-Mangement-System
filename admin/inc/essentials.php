<?php

define('UPLOAD_IMAGE_PATH', '../images/users/');
define('USERS_FOLDER','');

function adminLogin(){
	session_start();
	if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
		echo"<script>
					window.location.href='index.php';
				</script>";
	}
}

function redirect($url){
	echo"<script>
		window.location.href='$url';
	</script>";
}

function alert($type, $msg) {
    $bs_alert = ($type == "success") ? "alert-success" : "alert-danger";

    echo '<div class="position-fixed mt-6 top-6 end-0 p-3" style="z-index: 9999">
	    <div class="alert ' . $bs_alert . ' alert-dismissible fade show" role="alert">
        <strong>' . $msg . '</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
		</div>';
}



function uploadUserImage($image){
	$valid_mine = ['image/jpeg', 'image/png', 'image/webp'];
	$img_mine = $image['type'];

	if(!in_array($img_mine, $valid_mine)){
		return 'inv_img'; //invalid image mmine or format
	}
	else{
		$ext = pathinfo($image['name'],PATHINFO_EXTENSION);
		$name = 'IMG_'.random_int(11111,99999).".jpeg";

		$img_path = UPLOAD_IMAGE_PATH.USERS_FOLDER.$name;

		if($ext == 'png' || $ext == 'PNG'){
			$img = imagecreatefrompng($image['tmp_name']);
		}
		else if($ext == 'webp' || $ext == 'WEBP'){
			$img = imagecreatefromwebp($image['tmp_name']);
		}
		else{
			$img = imagecreatefromjpeg($image['tmp_name']);
		}

		if(imagejpeg($img,$img_path,75)){
			return $rname;
		}
		else{
			return 'upd_failed';
		}
	}
}


?>