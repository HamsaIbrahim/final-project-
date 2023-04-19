<?php
session_start();
	include 'include/connection.php';
	
	$comment=$_POST['comment'];
	$eventId=$_POST['eventId'];
	//$city=$_POST['city'];
    $userId=$_SESSION['id'];
	$sql = "INSERT INTO `comments`(`comment`, `event_id`, `userId`) VALUES ('$comment','$eventId','$userId')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>