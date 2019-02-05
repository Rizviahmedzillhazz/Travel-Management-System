<?php

	$user = $_GET['user'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'webtec');

	$sql = "select * from user where user='".$user."'";

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['id']." | ".$row['name']." | ".$row['dept']." | ".$row['email']."<br/>";
	}

	
?>