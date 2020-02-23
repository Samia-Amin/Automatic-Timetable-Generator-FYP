<?php
	require('config/config.php');
	require('config/db.php');

	// Create Query
	$query = 'SELECT * FROM subject';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$subject_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	// mysqli_close($conn);
?>
<?php include('inc/header.php') ?>
	<!-- faculty pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;">subject Panel</legend>
						<a href="addsubject.php" style="color:#020031;" > Add subject</a>
			  </fieldset>
			<fieldset >
				<legend style="width:auto;font-weight:bold;color:#020031;">subject List</legend>
				<ul class="list-group list-group-flush faculty-list">
				<?php foreach($subject_list as $subject) : ?>
					<li class="list-group-item"><?php echo $subject['sub_name']; ?>
					<small>Lab Required:<b><?php echo $subject['lab_required']?></b> | </small>
					<small>Teacher:<b><?php 
							// Create Query
							$f_id = $subject['fac_sub_id'];
		$query = 'SELECT * FROM faculty WHERE fac_id = '.$f_id;
		// Get Result
		$result = mysqli_query($conn, $query);
		// Fetch Data
		$faculty = mysqli_fetch_assoc($result);
		echo $faculty['fac_name'];
		// Free Result
		mysqli_free_result($result);
					?></b> | </small>
					<small>Semester:<b><?php 
							// Create Query
							$s_id = $subject['sem_id'];
		$query = 'SELECT * FROM semester WHERE sem_id = '.$s_id;
		// Get Result
		$result = mysqli_query($conn, $query);
		// Fetch Data
		$semester = mysqli_fetch_assoc($result);
		echo $semester['sem_name'];
		// Free Result
		mysqli_free_result($result);
					?></b></small>
					<a class="btn btn-sm pull-right btn-warning" href="<?php echo ROOT_URL; ?>/updatesubject.php?id=<?php echo $subject['sub_id']; ?>">Update</a>
					<a class="btn btn-sm pull-right btn-danger mr-2" href="<?php echo ROOT_URL; ?>/deletesubject.php?id=<?php echo $subject['sub_id']; ?>">Delete</a></li>
					<?php endforeach; ?>
				</ul>
			</fieldset>
			
			</div>

		</div>


	<!-- end faculty pannel -->
	<?php include('inc/footer.php') ?>