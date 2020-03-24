<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$sub_name = mysqli_real_escape_string($conn, $_POST['sub_name']);
		$sub_credits = mysqli_real_escape_string($conn, $_POST['sub_credits']);
		$fac_sub_id = mysqli_real_escape_string($conn, $_POST['fac_sub_id']);
		$sem_id = mysqli_real_escape_string($conn, $_POST['sem_id']);
		$lab_required = mysqli_real_escape_string($conn, $_POST['lab_required']);

		$query = "UPDATE subject SET 
					sub_name='$sub_name',
					sub_credits='$sub_credits',
					fac_sub_id = '$fac_sub_id',
					sem_id= '$sem_id',
					lab_required='$lab_required'
					 WHERE sub_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/subject.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM subject WHERE sub_id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$subject = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);
		// Create Query
		$query = 'SELECT * FROM faculty';

		// Get Result
		$result = mysqli_query($conn, $query);
	
		// Fetch Data
		$faculty_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		// Free Result
		mysqli_free_result($result);
		
		// Create Query
		$query = 'SELECT * FROM semester';

		// Get Result
		$result = mysqli_query($conn, $query);

		// Fetch Data
		$semester_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		//var_dump($posts);

		// Free Result
		mysqli_free_result($result);
	
		// Close Connection
		mysqli_close($conn);
?>
<?php include('inc/header.php') ?>
	<!-- subject pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Update subject Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="row">
							<div class="input-group col-6 m-0 pb-3">
								<input type="text" class="form-control m-0" name="sub_name" placeholder="subject Name" value="<?php echo $subject['sub_name']; ?>">
							</div>
							<div class="form-group col-3 m-0 pb-3">
							<select class="form-control" name="lab_required">
								<option selected>Lab Required?</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
							</div>
							<div class="form-group col-3 m-0 pb-3">
							<div class="input-group">
								<input type="number" class="form-control" name="sub_credits" value="<?php echo $subject['sub_credits']; ?>">
							</div>
							</div>
							<div class="form-group col-6 m-0 pb-3">
							<select class="form-control" name="fac_sub_id">
								<option selected>Assign Teacher</option>
								<?php foreach($faculty_list as $member) : ?>
								<option value="<?php echo $member['fac_id']; ?>"><?php echo $member['fac_name']; ?></option>
								<?php endforeach; ?>
							</select>
							</div>
							<div class="form-group col-6 m-0 pb-3">
							<select class="form-control" name="sem_id">
								<option selected>Assign Semester</option>
								<?php foreach($semester_list as $semester) : ?>
								<option value="<?php echo $semester['sem_id']; ?>"><?php echo $semester['sem_name']; ?></option>
								<?php endforeach; ?>
							</select>
							</div>
						</div>
							<input type="hidden" name="update_id" value="<?php echo $subject['sub_id']; ?>">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;margin-right:0px;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end subject pannel -->

<?php include('inc/footer.php') ?>