<?php
	require("admin/connect.php");
	$sql = "SELECT * FROM users WHERE is_active = 1";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$name = $row["user_name"];
	}
	$sql = "UPDATE `users` SET `is_active` = '0' WHERE `users`.`user_name` = '".$name."'";
	$result = mysqli_query($conn,$sql);
	header("Location: product.php");
 ?>