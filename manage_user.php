

<?php include "admin_header.php";


if(isset($_GET['del'])){
	$del = $_GET['del'];
	$delete = delete('member', $_GET['del']);
	echo $delete;
}



$members = view('member', 'id, name, cell, email, usertype');

 ?>
 
 <table border="1" cellpadding='5' cellspacing="0">
 <tr>

	<th valign='top' align='left' rowspan="<?php echo $members->num_rows + 1 ; ?>">
	<ol style="list-style-type:square">
                <li><a href="manage_user.php" target="iFrame">Manage User</a></li>
                <li><a href="read/profile.html" target="iFrame">Manage Ticket Booking</a></li>
                <li><a href="write/edit_profile.html" target="iFrame">Manage Payment</a></li>
                <li><a href="write/picture.html" target="iFrame">View Cancellation</a></li>
                <li><a href="write/change_password.html" target="iFrame">vief feedback</a></li>
                
	</ol>
	</th>
	<th>Name</th>
	<th>cell NO</th>
	<th>email</th>
	<th>User TYpe</th>
	<th>Options</th>
</tr>

<?php
while($member = mysqli_fetch_object($members)){
?>
    
	<tr>
		<td><?php echo $member->name; ?></td>
		<td><?php echo $member->cell; ?></td>
		<td><?php echo $member->email; ?></td>
		<td><?php 
					if($member->usertype == 1)
						echo "Admin";
					if($member->usertype == 2)				
						echo "User";
					?></td>
		<td>
		<a href="">edit</a> / 
		<a href='
		<?php
		echo "?del=" . $member->id;
		?>
		'>delete</a>
		
		
		</td>
	</tr>
<?php
}
?>








</table>
</html>