﻿<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$fac_name = mysqli_real_escape_string($conn, $_POST['fac_name']);
		$fac_lactures = mysqli_real_escape_string($conn, $_POST['fac_lactures']);

		$query = "INSERT INTO faculty(fac_name,fac_lactures) VALUES('$fac_name','$fac_lactures')";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/faculty.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>
<?php include('inc/header.php') ?>
	<!-- faculty pannel -->
		<div class="container pt-5">
			<div class="fpanel" >
				<fieldset style="padding:10px 20px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Add Faculty Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control" name="fac_name" placeholder="Teacher Name">
							</div>
							<div class="input-group mt-3">
								<input type="number" class="form-control" name="fac_lactures" placeholder="How Many Lactures Allowed In A Week?">
							</div>
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end faculty pannel -->

<?php include('inc/footer.php') ?>