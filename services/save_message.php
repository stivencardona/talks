<?php
	include("../config_db.php");
	$message = isset($_POST["message"]) ? $_POST["message"] : "";
	$token = hash("sha256", $message);
	$conn->query("INSERT INTO messages (token, message) VALUES ('$token','$message')");
	echo json_encode(array("token" => $token));
?>