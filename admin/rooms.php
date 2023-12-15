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
    <title>Admin Panel - Rooms</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-white">
    
    <?php require('inc/header.php'); ?>
	
		<div class="container-fluid" id="main-content">
			<div class="row">
				<div class="col-lg-10 ms-auto p-4 overflow-hidden justify-content-evenly">
					<h3 class="mb-4">ROOMS</h3>

					<div class="card border-0 shadow-sm mb-4">
						<div class="card-body">
							
							<div class="text-end mb-4">
								<button class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
									<i class="bi bi-plus-square"></i>Add
								</button>	
							</div>

							<div class="table-responsive-ld" style="height: 450px; overflow-y: scroll;">
								<table class="table table-hover border">
									<tr class="bg-dark text-light">
										<th scope="col">Username</th>
										<th scope="col">Customer name (user or beneficiary)</th>
										<th scope="col">Email</th>
										<th scope="col">Check-in Date</th>
										<th scope="col">Check-out Date</th>
										<th scope="col">Guest No:</th>
										<th scope="col">Room No:</th>
										<th scope="col">Status</th>
										<th scope="col">Action</th>
									</tr>
									<tbody id="room-data">
										<?php
										$sql = "Select * from `rooms`";
										$result = mysqli_query($con, $sql);
										while($row = mysqli_fetch_assoc($result)){
											$username = $row['username'];
											$customer_name = $row['customer_name'];
											$email = $row['email'];
											$check_in_date = $row['check_in_date'];
											$check_out_date = $row['check_in_date'];
											$guest_num = $row['guest_num'];
											$room_id = $row['room_id'];
											$status = $row['status'];
											$action = $row['action'];

											echo '<tr>
											<td class="text-center">'.$username.'</th>
											<td class="text-center">'.$customer_name.'</th>
											<td class="text-center">'.$email.'</th>
											<td class="text-center">'.$check_in_date.'</th>
											<td class="text-center">'.$check_out_date.'</th>
											<td class="text-center">'.$room_id.'</th>
											<td class="text-center">'.$status.'</th>
											<td class="text-center">'.$action.'</th>
										</tr>';
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


<div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form id="add_room_form" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Room</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Area</label>
                            <input type="number" min="1" name="area" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Price</label>
                            <input type="number" min="1" name="price" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Quantity</label>
                            <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Adult (Max.)</label>
                            <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Children (Max.)</label>
                            <input type="number" min="1" name="children" class="form-control shadow-none" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
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
</script>


</body>
</html>
