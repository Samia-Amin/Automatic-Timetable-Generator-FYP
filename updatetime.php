<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$slot_increment = 0;
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$day = mysqli_real_escape_string($conn, $_POST['day']);
		$time_slot = mysqli_real_escape_string($conn, $_POST['time_slot']);
		switch($day){
			case Monday:
			 $slot_increment = 0;
			 break;
			case Tuesday:
			 $slot_increment = 7;
			 break;
			case Wednesday:
			 $slot_increment = 14;
			 break;
			case Thursday:
			 $slot_increment = 21;
			 break;
			case Friday:
			 $slot_increment = 28;
			 break;
		}
		$slot = substr($time_slot,0,1);
		$slot = $slot + $slot_increment;
		$time = substr($time_slot,2);
		$query = "UPDATE time SET day='$day',time='$time',slot_name='$slot' WHERE time_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'/time.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM time WHERE time_id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$time = mysqli_fetch_assoc($result);
	//var_dump($posts);
	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>
<?php include('inc/header.php') ?>
	<!-- time pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Update  Time Details</legend>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="row">
							<div class="form-group col-6 m-0">
							<select class="form-control" name="day">
								<option selected>Select Day</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
							</select>
							</div>
							<div class="form-group col-6 m-0">
							<select class="form-control" name="time_slot">
								<option selected>Select Time Slot</option>
								<option value="1-8:00-9:30">Normal: 8:00 to 9:30</option>
								<option value="2-9:30-11:00">Normal: 9:30 to 11:00</option>
								<option value="3-11:00-12:30">Normal: 11:00 to 12:30</option>
								<option value="4-12:30-2:00">Normal: 12:30 to 02:00</option>
								<option value="5-02:00-03:30">Normal: 02:00 to 03:30</option>
								<option value="6-03:30-05:00">Normal: 03:30 to 05:00</option>
								<option value="7-05:00-06:00">Normal: 05:00 to 06:00</option>
								<option value="1-8:00-9:20">Short: 8:00 to 9:20</option>
								<option value="2-9:20-10:40">Short: 9:20 to 10:40</option>
								<option value="3-10:40-12:00">Short: 10:40 to 12:00</option>
								<option value="4-12:00-1:20">Short: 12:00 to 01:20</option>
								<option value="5-02:00-03:30">Short: 02:00 to 03:30</option>
								<option value="6-03:30-05:00">Short: 03:30 to 05:00</option>
								<option value="7-05:00-06:00">Short: 05:00 to 06:00</option>
							</select>
							</div>
							</div>
							<input type="hidden" name="update_id" value="<?php echo $time['time_id']; ?>">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top:10px;float:right;margin-right:0px;">
						</form>
			  </fieldset>
			</div>

		</div>
	<!-- end time pannel -->

<?php include('inc/footer.php') ?>