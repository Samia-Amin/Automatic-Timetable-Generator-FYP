<?php
	require('config/config.php');
	require('config/db.php');

	// Create Query
	$query = 'SELECT * FROM time';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$time_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
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
						<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Time Panel</legend>
						<a href="addtime.php" style="color:#020031;" ><i class="fa fa-plus" aria-hidden="true"></i> Add time</a>
			  </fieldset>
			<fieldset >
				<legend style="width:auto;font-weight:bold;color:#020031;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Time List</legend>
				<ul class="list-group list-group-flush faculty-list">
				<?php foreach($time_list as $time) : ?>
					<li class="list-group-item">SLOT <?php echo $time['slot_name']; ?>
					<small>Day: <b><?php echo $time['day']?></b> | </small>
					<small>Time: <b><?php echo $time['time']?></b></small>
					<a class="btn btn-sm pull-right btn-warning" href="<?php echo ROOT_URL; ?>/updatetime.php?id=<?php echo $time['time_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a>
					<a class="btn btn-sm pull-right btn-danger mr-2" href="<?php echo ROOT_URL; ?>/deletetime.php?id=<?php echo $time['time_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></li>
					<?php endforeach; ?>
				</ul>
			</fieldset>
			
			</div>

		</div>


	<!-- end faculty pannel -->
	<?php include('inc/footer.php') ?>