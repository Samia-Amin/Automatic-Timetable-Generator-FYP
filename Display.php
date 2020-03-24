<?php include('inc/header.php') ?>
<?php
	require('config/config.php');
	require('config/db.php');

	// Create Query
	$query = 'SELECT * FROM faculty';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
    $faculty_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // Free Result
    mysqli_free_result($result);
    $faculty_count = count($faculty_list);

	// Create Query
	$query = 'SELECT * FROM room';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
    $room_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // Free Result
    mysqli_free_result($result);
	$room_count = count($room_list);

	// Create Query
	$query = 'SELECT * FROM semester';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
    $semester_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // Free Result
    mysqli_free_result($result);
    $semester_count = count($semester_list);
    
	// Create Query
	$query = 'SELECT * FROM subject';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
    $subject_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // Free Result
    mysqli_free_result($result);
    $subject_count = count($subject_list);

	// Close Connection
	mysqli_close($conn);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5 card card-body">
        <table class="table">
  <tbody>
  <tr class="thead-dark">
        <th colspan="6">Monday</th>
    </tr>
  <tr class="thead-dark">
        <th >ROOMS</th>
            <th>8:00 - 9:00</th>
            <th>9:00 - 10:00</th>
            <th>10:00 - 11:00</th>
            <th>11:00 - 12:00</th>
            <th>12:00 - 1:00</th>
        </tr>
        <tr>
            <td>R2</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
        </tr>
        <tr>
            <td>R2</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
        </tr>
  </tbody>
</table>
        </div>
    </div>
</div>
<?php include('inc/footer.php') ?>