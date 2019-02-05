<?php 
	include "header.php";	
?>

<!doctype html>
<html>
<head>
<title>Travel Managment</title>
</head>
<body>
<h1>Login</h1>
<?php 
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	$info_insert= view('member','id,email,password,usertype', " email='$email' AND password='$password' " );
	
	if($info_insert->num_rows == 1){
		while($row = mysqli_fetch_object($info_insert)){
			if($row->usertype == 1){
				header("Location: admin_home.php");
				exit;
			}
			if($row->usertype == 2)		{
				header("Location: user_home.php");
				 exit;
				}
		}
				
	}else{
		echo "invalid user;";
	}
	
	
}
?>
<form action="#" method="post">
			<table>
			<tr>
			<td>Email :<input type="text" name="email"><br></td>
			</tr>
			<tr>
			<td>Password :<input type="password" name="password"><br><br</td>
			</tr>
			<tr>
			
			<td><input type="submit" name="submit" value="Submit"></td>
			<tr>
			</table>
		</form>
</body>
</html
<?php include "footer.php";?> 