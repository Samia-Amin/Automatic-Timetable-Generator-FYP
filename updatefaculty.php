<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$fac_name = mysqli_real_escape_string($conn, $_POST['fac_name']);
		$fac_lactures = mysqli_real_escape_string($conn, $_POST['fac_lactures']);

		$query = "UPDATE faculty SET 
					fac_name='$fac_name',fac_lactures='$fac_lactures' WHERE fac_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/faculty.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM faculty WHERE fac_id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$member = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>
<?php include('inc/header.php') ?>
	<!-- faculty pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Add Faculty Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control" name="fac_name" value="<?php echo $member['fac_name']; ?>">
							</div>
							<div class="input-group mt-3">
								<input type="number" class="form-control" name="fac_lactures" value="<?php echo $member['fac_lactures']; ?>">
							</div>
							<input type="hidden" name="update_id" value="<?php echo $member['fac_id']; ?>">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end faculty pannel -->

<?php include('inc/footer.php') ?>