<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$room_name = mysqli_real_escape_string($conn, $_POST['room_name']);
		$is_lab = mysqli_real_escape_string($conn, $_POST['is_lab']);

		$query = "UPDATE room SET 
					room_name='$room_name',is_lab='$is_lab' WHERE room_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/room.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM room WHERE room_id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$room = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>
<?php include('inc/header.php') ?>
	<!-- room pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;">Update Room Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">						
						<div class="row">
							<div class="input-group col-8 m-0">
								<input type="text" class="form-control m-0" name="room_name" placeholder="Room Name" value="<?php echo $room['room_name']; ?>">
							</div>
							<div class="form-group col-4 m-0">
							<select class="form-control" name="is_lab">
								<option selected>Does It Have Lab?</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
							</div>
							</div>
							<input type="hidden" name="update_id" value="<?php echo $room['room_id']; ?>">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;margin-right:0px;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end room pannel -->

<?php include('inc/footer.php') ?>