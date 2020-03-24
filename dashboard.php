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
        <div class="col-lg-3 pt-5">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row m-0 d-flex align-items-center">
                        <div class="col-8 text-left p-0">
                            <h1><?php echo $faculty_count?></h1>
                            <div class="card-title h6">Faculty Members</div>
                        </div>
                        <div class="col-4 text-right p-0">
                        <i class="fa fa-users fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pt-5">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row m-0 d-flex align-items-center">
                        <div class="col-8 text-left p-0">
                            <h1><?php echo $semester_count?></h1>
                            <div class="card-title h6">Total Semesters</div>
                        </div>
                        <div class="col-4 text-right p-0">
                        <i class="fa fa-cubes fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pt-5">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row m-0 d-flex align-items-center">
                        <div class="col-8 text-left p-0">
                            <h1><?php echo $subject_count?></h1>
                            <div class="card-title h6">Total Subjects</div>
                        </div>
                        <div class="col-4 text-right p-0">
                        <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pt-5">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row m-0 d-flex align-items-center">
                        <div class="col-8 text-left p-0">
                            <h1><?php echo $room_count?></h1>
                            <div class="card-title h6">Total Rooms</div>
                        </div>
                        <div class="col-4 text-right p-0">
                        <i class="fa fa-building fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php') ?>