<?php
    require('inc/essentials.php');
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
	<?php require('inc/db_config.php');?>

	<?php
    if(isset($_POST['save'])){
        $category_name = $_POST['category_name'];
        $price = $_POST['price'];
        $cover_img = $_FILES['cover_img'];

        $imagefilename = $cover_img['name'];
       
        $imagefileerror = $cover_img['error'];
       
        $imagefiletemp = $cover_img['tmp_name'];
        
        $filename_seperate = explode('.', $imagefilename);
        
        $file_extension = strtolower($filename_seperate[1]);


        $extension = array('jpeg', 'jpg', 'png');
        if (in_array($file_extension, $extension)) {
            $upload_image = 'images/category/' . $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);

            // Prepare the SQL statement
            $sql = "INSERT INTO `room_categories` (name, price, cover_img) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($con, $sql);

            // Bind parameters (s for string, d for double/float)
            mysqli_stmt_bind_param($stmt, "sds", $category_name, $price, $upload_image);

            // Execute the statement
            $result = mysqli_stmt_execute($stmt);

            // Check the result
            if ($result) {
                // echo "Data inserted";
				alert('success', 'Data inserted');
            } else {
                // echo "Error: " . mysqli_error($con);
				alert('error', 'Data not inserted');
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        }
    }
?>




<div class="container-fluid" >
	
	<div class="col-lg-10 ms-auto p-4 overflow-hidden">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						    Room Category Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Category</label>
								<input type="text" class="form-control" name="category_name">
							</div>
							<div class="form-group">
								<label class="control-label">Price</label>
								<input type="number" class="form-control text-right" name="price" step="any">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Image</label>
								<input type="file" class="form-control" name="cover_img" onchange="displayImg(this,$(this))">
							</div>
							<div class="form-group">
								<img src="<?php echo isset($image_path) ? '../assets/img/'.$cover_img :'' ?>" alt="" id="cimg">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button name="save" type="submit"class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="$('#manage-category').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Img</th>
									<th class="text-center">Room</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql = "Select * from `room_categories`";
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_assoc($result)){
										$id = $row['id'];
										$cover_img = $row['cover_img'];
										$name = $row['name'];
										$price = $row['price'];

										echo '<tr>
										<td class="text-center">'.$id.'</th>
										<td class="text-center"><img src='.$cover_img.'></th>
										<td class="">
											<p>Name : <b>'.$name.'</b></p>
											<p>Price : <b>'.$price.'</b></p>
										</td>
										<td class="text-center">Action</th>
									</tr>';
									}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>

<?php require('inc/scripts.php'); ?>

<style>
	img#cimg,.cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
	td{
		vertical-align: middle !important;
	}
</style>

<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->


</body>
</html>
