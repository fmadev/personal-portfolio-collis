<?php 
	require_once '../db.php';
	session_start();
	$id = $_GET['id'];
	$restore = "UPDATE progress SET status = 1 where id = $id";
	if (mysqli_query($conn, $restore)) {
		$_SESSION['success'] = 'Successfull.';
		header('location:trash-progress.php?id='.$id);
	}
 ?>