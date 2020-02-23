<?php
	require('config/config.php');
	require('config/db.php');

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = "DELETE FROM subject WHERE sub_id = {$id}";

	if(mysqli_query($conn, $query)){
        header('Location: '.ROOT_URL.'/subject.php');
    } else {
        echo 'ERROR: '. mysqli_error($conn);
    }
?>