<?php include "header.php"; ?>
<?php

if(isset($_POST['submit'])){
	

$name=$_POST['name'];
$cell=$_POST['cell'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$user_type=$_POST['usertype'];
$confirm_password=$_POST['confirm_password'];



$error = 0;
$name_error="";
$email_error="";
$password_error="";
$cell_error="";

 if ( str_word_count($name)< 2)
	{
		$error++;
		$name_error = "Name is Invalid";

	}
	

	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
      $error++;
	  $email_error="Email is Invalid";
	}
//$match = strcmp($password,$confirm_password);
	
	
	if( $_POST['password'] != $_POST['confirm_password'] )
	{
			$error++;
		$password_error="Password did not match";
	}
		
	
	
	if(is_numeric($cell) != 1 || strlen($cell) != 11)
	{
		$error++;
		$cell_error="Invalid Cell number";
	}


	if($error == 0){
	
		$info_insert = insert('member','name, cell , password , email , usertype',
"'$name','$cell' ,'$password' ,'$email ', '$user_type'");
		if($info_insert == 1 ){
			$_SESSION["username"] = $name;
			$_SESSION["user_type"] = $user_type;
			if($user_type == 1){
				header("Location: admin_home.php");
				exit;
			}
			if($user_type == 2)		{
				header("Location: user_home.php");
				 exit;
				}
		  
			}
       
	}





}






?>

<!DOCTYPE html>
<html>
<center>
<form action="#" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
	
		<tr>
			<td>
				<fieldset>

					Name<br/><input type="text" name="name"><br/>

					<?php
					if(isset($name)){
						echo "<i>" . $name_error . "</i> <br/>";
					}
					?>
					Cell no<br/><input type="text" name="cell"><br/>
					<?php
					if(isset($cell)){
						echo "<i>" . $cell_error . "</i> <br/>";
					}
					?>
					Password<br/><input type="text" name="password"><br/>
					Confirm Password<br/><input type="text" name="confirm_password"><br/>
					<?php
					if(isset($confirm_password )){
						
						echo"<i>".$password_error ."</i> <br/>";
					}?>
					Email<br/><input type="text" name="email"><br/>
					<?php
					if(isset($email)){
						
						echo"<i>".$email_error."</i> <br/>";
					}?>
					User Type<hr/>
					<input type="radio" name="usertype" value="2"/>User
					<input type="radio" name="usertype" value="1"/>Admin
					<hr/>
					<input type="submit" value="Sign Up" name="submit">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
	
</form>

</center>
</html>
<?php include "footer.php";?>