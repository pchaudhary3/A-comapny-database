<html>
<head>	
	<title>Inventory</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

      <link rel="stylesheet" href="inventory.css">
</head>

<body>
	
	<div id="header">
		<h1>Inventory</h1>
	</div>
	<div id="content">
		<div id="floating_div">
			  Go To:
			  <p id="design"><a href="../index.php">Main Page</a> </p>
			
			</div>
	

	<table width='50%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Model No</td>
		<td>Product_Type</td>
		<td>Price</td>
		<td>Quantity</td>
		
	</tr>
	
	
	<?php 
	
	//including the database connection file
	include_once("../config.php");

	//fetching data in descending order (lastest entry first)
	$result = mysqli_query($mysqli, "SELECT * FROM Inventory");

	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['Model_No']."</td>";
		echo "<td>".$res['Product_Type']."</td>";
		echo "<td>".$res['Price']."</td>";
		echo "<td>".$res['Quantity']."</td>";
		
	}
	?>
	</table>
	</div>
	<div id="footer">
		<h6>Created by: Prachi Chaudhary, Ryan Newton and Jared Melton </h6>
	</div>
	
</body>
</html>
