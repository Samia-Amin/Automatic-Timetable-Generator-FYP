<?php
	require('config/config.php');
	require('config/db.php');

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = "DELETE FROM semester WHERE sem_id = {$id}";

	if(mysqli_query($conn, $query)){
        header('Location: '.ROOT_URL.'/semester.php');
    } else {
        echo 'ERROR: '. mysqli_error($conn);
    }
?>