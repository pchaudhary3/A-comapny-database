<!DOCTYPE html>
<html lang="en">
<head>	
<meta charset="UTF-8">
	<title>Department table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

      <link rel="stylesheet" href="department.css">
</head>

<body>

	<div id="header">
	<h1>Department table</h1>	
	</div>
	<div id="content">
			<div id="floating_div">
			  Go To:
			  <p id="design"><a href="../index.php">Main Page</a> </p>
			
			</div>
	<a href="add.html">Add New Data</a><br/><br/>

	<table width='50%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td style="font-weight:bold;font-align:center;">Department</td>
		<td style="font-weight:bold;font-align:center;">Update</td>
	</tr>
		
	
	
	
	<?php 
	
	//including the database connection file
	include_once("../config.php");
	
	//fetching data in descending order (lastest entry first)
	$result = mysqli_query($mysqli, "SELECT * FROM Department");

	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['Department']."</td>";
		echo "<td><a href=\"edit.php?id=$res[Department_ID]\">Edit</a> | <a href=\"delete.php?id=$res[Department_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	
	</div>
	
	<div id="footer">
	 <h6>Created by: Prachi Chaudhary, Ryan Newton and Jared Melton </h6>
		</div>
</body>
</html>
