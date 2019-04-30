<?php
// including the database connection file
include_once("../config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['Department_ID']);
	
	$department = mysqli_real_escape_string($mysqli, $_POST['Department']);
	
	// checking empty fields
	if(empty($department)) {	
			
		if(empty($department)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}
		
			
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE Department SET Department='$department' WHERE Department_ID=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM Department WHERE Department_ID=$id");

while($res = mysqli_fetch_array($result))
{
	$department = $res['Department'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

      <link rel="stylesheet" href="edit.css">
</head>

<body>
	<div id="header">
			<h1>Edit Department</h1>
	</div>

	<!--<a href="index.php">Home</a>-->
	<br/><br/>
	<div id="content">
		<div id="floating_div">
			  Go To:
			  <p id="design"><a href="../index.php">Main Page</a> </p>
			
			</div>
		<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td style="font-weight:bold;font-align:center;">Department Name:</td>
				<td><input type="text" name="Department" value="<?php echo $department;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="Department_ID" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
		
	</div>
	<div id="footer">
		 <h6>Created by: Prachi Chaudhary, Ryan Newton and Jared Melton </h6>
	</div>
</body>
</html>
