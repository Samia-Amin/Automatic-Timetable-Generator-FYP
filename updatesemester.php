<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$sem_name = mysqli_real_escape_string($conn, $_POST['sem_name']);

		$query = "UPDATE semester SET 
					sem_name='$sem_name' WHERE sem_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/semester.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM semester WHERE sem_id = '.$id;

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
	<!-- semester pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;">Update semester Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control" name="sem_name" value="<?php echo $member['sem_name']; ?>">
							</div>
							<input type="hidden" name="update_id" value="<?php echo $member['sem_id']; ?>">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;margin-right:0px;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end semester pannel -->

<?php include('inc/footer.php') ?>