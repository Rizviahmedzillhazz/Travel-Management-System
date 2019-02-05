
<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
<body>

	<div >
		
		<select name="user" id="user" onchange="getSelectedData()">
			<option value="Customer">Customer</option>
			<option value="Traveller">Traveller</option>
			
		</select>

		<div id="demo">

		</div>
	</div>

	<script>
		
		function getSelectedData(){
		
		var user = document.getElementById('user').value;

		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "test.php?user="+user, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("demo").innerHTML = this.responseText;

			    }
			};
		}

	</script>
</body>
</html>