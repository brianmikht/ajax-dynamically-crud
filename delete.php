<?php
require_once("config.php");
	$delete_id = $_GET['delete_id'];
 
	// $data = file_get_contents('file.json');
	// $data = json_decode($data, true);
 
	// unset($data[$delete_id]);
 
	// //encode back to json
	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// file_put_contents('file.json', $data);
    
    $conn = $db->connection;
    $sql = "DELETE FROM objek WHERE id=$delete_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

	header('location: manage.php');	
?>