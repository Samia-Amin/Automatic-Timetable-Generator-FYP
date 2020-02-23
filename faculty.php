<?php
	require('config/config.php');
	require('config/db.php');

	// Create Query
	$query = 'SELECT * FROM faculty';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$faculty_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
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
				<fieldset style="padding:10px 0;margin-bottom:20px;">
						<legend style="width:auto;font-weight:bold;color:#020031;">Faculty Panel</legend>
						<a href="addfaculty.php" style="color:#020031;" > Add Faculty</a>
			  </fieldset>
			<fieldset >
				<legend style="width:auto;font-weight:bold;color:#020031;">Faculty List</legend>
				<ul class="list-group list-group-flush faculty-list">
				<?php foreach($faculty_list as $member) : ?>
					<li class="list-group-item"><?php echo $member['fac_name']; ?>
					<a class="btn btn-sm pull-right btn-warning" href="<?php echo ROOT_URL; ?>/updatefaculty.php?id=<?php echo $member['fac_id']; ?>">Update</a>
					<a class="btn btn-sm pull-right btn-danger mr-2" href="<?php echo ROOT_URL; ?>/deletefaculty.php?id=<?php echo $member['fac_id']; ?>">Delete</a></li>
					<?php endforeach; ?>
				</ul>
			</fieldset>
			
			</div>

		</div>


	<!-- end faculty pannel -->
	<?php include('inc/footer.php') ?>