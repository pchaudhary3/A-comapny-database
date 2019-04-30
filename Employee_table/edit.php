<?php
// including the database connection file
include_once("../config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['Employee_ID']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$SSN = mysqli_real_escape_string($mysqli, $_POST['SSN']);
	$dob = mysqli_real_escape_string($mysqli, $_POST['DOB']);
	$phone_number = mysqli_real_escape_string($mysqli, $_POST['Phone_Number']);
	$address = mysqli_real_escape_string($mysqli, $_POST['Address']);
	
	// checking empty fields
	if(empty($name) || empty($SSN) || empty($dob) || empty($phone_number) || empty($address)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($SSN)) {
			echo "<font color='red'>SSN field is empty.</font><br/>";
		}
		
		if(empty($dob)) {
			echo "<font color='red'>DOB field is empty.</font><br/>";
		}
		if(empty($phone_number)) {
			echo "<font color='red'>phone number field is empty.</font><br/>";
		}
		if(empty($address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE Employee SET Name='$name',SSN='$SSN',DOB='$dob',Phone_Number='$phone_number',Address='$address' WHERE Employee_ID=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM Employee WHERE Employee_ID=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['Name'];
	$SSN = $res['SSN'];
	$dob = $res['DOB'];
	$phone_number=$res['Phone_Number'];
	$address=$res['Address'];
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
		<h1>Edit Employee table</h1>
	</div>
	<div id="content">
		<div id="floating_div">
			  Go To:
			  <p id="design"><a href="../index.php">Main Page</a> </p>
			
			</div>
			<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>SSN</td>
				<td><input type="text" name="SSN" value="<?php echo $SSN;?>"></td>
			</tr>
			<tr> 
				<td>DOB</td>
				<td><input type="date" name="DOB" value="<?php echo $dob;?>"></td>
			</tr>
			<tr> 
				<td>Phone number</td>
				<td><input type="text" name="Phone_Number" value="<?php echo $phone_number;?>"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="Address" value="<?php echo $address;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Employee_ID" value=<?php echo $_GET['id'];?>></td>
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
