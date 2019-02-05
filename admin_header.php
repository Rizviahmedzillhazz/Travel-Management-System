<?php include "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<div class="nav">
			<table class="table"  width="100%">
				
				<tr align="center">
				    <td>welcome &nbsp<?php if(isset($_SESSION["username"]))
					{	
						echo $_SESSION["username"];
						}?> </td>
					<td><a href="index.php">Logout</a></td>
					
					
				</tr>
				</table>
				
				
				</div>
				
				</table>
		
		