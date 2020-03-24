<?php
	require('config/config.php');
    require('config/db.php');
    
	// Create Query
	$query = 'SELECT * FROM faculty';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
	$faculty_list = mysqli_fetch_all($result);
	// Free Result
    mysqli_free_result($result);
    //print array
    print_r($faculty_list);
    echo '<br>';


	// Create Query
	$query = 'SELECT * FROM room';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
	$room_list = mysqli_fetch_all($result);
	// Free Result
    mysqli_free_result($result);
    //print array
    print_r($room_list);
    echo '<br>';

    
    // Create Query
	$query = 'SELECT * FROM semester';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
	$semester_list = mysqli_fetch_all($result);
	// Free Result
    mysqli_free_result($result);
    //print array
    print_r($semester_list);
    echo '<br>';


    // Create Query
	$query = 'SELECT * FROM subject';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
	$subject_list = mysqli_fetch_all($result);
	// Free Result
    mysqli_free_result($result);
    //print array
    print_r($subject_list);
    echo '<br>';


    // Create Query
	$query = 'SELECT * FROM time';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
	$time_list = mysqli_fetch_all($result);
	// Free Result
    mysqli_free_result($result);
    //print array
    print_r($time_list);
    echo '<br>';
?>