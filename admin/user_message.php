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
			// Handle 'del' condition when 'all' is passed
		} else {
			$q = "DELETE FROM `user_message` WHERE `sr_no`=?";
			$values = [$frm_data['del']]; // Assuming 'del' parameter contains the ID to be deleted
			if (delete($q, $values, 'i')) {
				alert('success', 'Deleted.');
			} else {
				alert('error', 'Operation Failed');
			}
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
                                                <td>$row[data]</td>
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
		
		<!-- Add Room Modal -->
		<!-- <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<form id="add_room_form">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Room</h5>
						</div>
						<div class="modal-body">

							<div class="row">
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Name</label>
									<input type="text" min="1" name="name"class="form-control shadow-none" required>
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Area</label>
									<input type="number" min="1" name="area"class="form-control shadow-none" required>
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Price</label>
									<input type="number" min="1" name="price"class="form-control shadow-none" required>
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Quantity</label>
									<input type="number" min="1" name="quantity"class="form-control shadow-none" required>
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Adult (Max.)</label>
									<input type="number" min="1" name="adult"class="form-control shadow-none" required>
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Children (Max.)</label>
									<input type="number" min="1" name="children"class="form-control shadow-none" required>
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label fw-bold">Description</label>
									<textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
								</div>
							</div>


							<!-- feature and facilities -->
							<!-- <div class="col-12 mb-3">
								<label class="form-label fw-bold">Features</label>
								<div class="row">
									
								</div>
							</div> -->
							<!-- <div class="col-12 mb-3">
								<label class="form-label fw-bold">Features</label>
								<div class="row">
									
								</div>
							</div> -->

						<!-- <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
							<button type="submit" class="btn btn-primary">SUBMIT</button>
						</div>
					</div>
				</form>
			</div>
  	</div>

<?php require('inc/scripts.php'); ?>
<script>

	let add_room_form = document.getElementById('add_room_form');

	add_room_form.addEventListner('submit',function(){
		e.preventDefault();
		add_room();
	})

	function add_room()
	{
		let data = new FormData();
		data.append('add_room','');
		data.append('name', add_room_form.element['name'].value);
		data.append('area', add_room_form.element['area'].value);
		data.append('price', add_room_form.element['price'].value);
		data.append('quantity', add_room_form.element['quantity'].value);
		data.append('adult', add_room_form.element['adult'].value);
		data.append('children', add_room_form.element['children'].value);
		data.append('desc', add_room_form.element['desc'].value);


		 let features = [];
		 add_rooms_form.element['features'].forEach(el =>(
		 	if(el.checked){
				features.push(el.value);
			}
	     ));
		
		
		
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "ajax/rooms.php", true);

		xhr.onload = function(){
			var myModal = document.getElementById('add-room');
			var modal = bootstrap.Modal.getInstance(myModal);
			modal.hide();

			if(this.reponseText == 1){
				alert('success', 'New room added');
				add_room_form.reset();
				get_rooms();
			}

			else{
				alert('error', 'Server Down! Sorry');
			}

		}

		xhr.send(data);
	}

	function get_all_rooms()
	{
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "ajax/rooms.php", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		xhr.onload = function(){
			document.getElementById('room-data').innerHTML = this.responseText;
		}

		xhr.send('get_all_rooms');
	}

		windows.onload = function()
		{
			get_all_rooms();
		}
</script> --> -->


</body>
</html>