<?php
	header("Access-Control-Allow-Origin: https://scam627.github.io");
	include("../config_db.php");
	$token = isset($_POST["token"]) ? $_POST["token"] : "";
	$result = $conn->query("SELECT message FROM messages WHERE token = '$token'");
	echo json_encode(array("message" => $result->fetch_assoc()["message"]), JSON_UNESCAPED_UNICODE);
?>
