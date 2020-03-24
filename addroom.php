<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$room_name = mysqli_real_escape_string($conn, $_POST['room_name']);
		$is_lab = mysqli_real_escape_string($conn, $_POST['is_lab']);

		$query = "INSERT INTO room(room_name,is_lab) VALUES('$room_name','$is_lab')";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/room.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>
<?php include('inc/header.php') ?>
	<!-- room pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 20px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Add Room Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="row">
							<div class="input-group col-8 m-0">
								<input type="text" class="form-control m-0" name="room_name" placeholder="Room Name">
							</div>
							<div class="form-group col-4 m-0">
							<select class="form-control" name="is_lab">
								<option selected>Does It Have Lab?</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
							</div>
							</div>
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;margin-right:0px;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end room pannel -->

<?php include('inc/footer.php') ?>