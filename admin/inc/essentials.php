<?php

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

	echo '
			<div class="alert ' . $bs_alert . ' ' . $type . ' alert-dismissible fade show custom-alert" role="alert">
					<strong>' . $msg . '</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
}



?>