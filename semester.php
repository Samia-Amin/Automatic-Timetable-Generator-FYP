<?php
	require('config/config.php');
	require('config/db.php');

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
	<!-- semester pannel -->
		<div class="container pt-5" >
			<div class="fpanel" >
				<fieldset style="padding:10px 0px;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;">Semester Panel</legend>
						<a href="addsemester.php" style="color:#020031;" > Add semester</a>
			  </fieldset>
			<fieldset >
				<legend style="width:auto;font-weight:bold;color:#020031;">Semester List</legend>
				<ul class="list-group list-group-flush semester-list">
				<?php foreach($semester_list as $member) : ?>
					<li class="list-group-item"><?php echo $member['sem_name']; ?>
					<a class="btn btn-sm pull-right btn-warning" href="<?php echo ROOT_URL; ?>/updatesemester.php?id=<?php echo $member['sem_id']; ?>">Update</a>
					<a class="btn btn-sm pull-right btn-danger mr-2" href="<?php echo ROOT_URL; ?>/deletesemester.php?id=<?php echo $member['sem_id']; ?>">Delete</a></li>
					<?php endforeach; ?>
				</ul>
			</fieldset>
			
			</div>

		</div>


	<!-- end semester pannel -->
	<?php include('inc/footer.php') ?>