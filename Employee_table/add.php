<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$ssn = mysqli_real_escape_string($mysqli, $_POST['SSN']);
	$dob = mysqli_real_escape_string($mysqli, $_POST['DOB']);
	$phoneNumber = mysqli_real_escape_string($mysqli, $_POST['Phone_Number']);
	$address = mysqli_real_escape_string($mysqli, $_POST['Address']);
		
	// checking empty fields
	if(empty($name) || empty($ssn) || empty($dob) || empty($phoneNumber) || empty($address)) {
				
		if(empty($name)) {
			echo "<font color='red'>First name field is empty.</font><br/>";
		}
		
		if(empty($ssn)) {
			echo "<font color='red'>Last name field is empty.</font><br/>";
		}
		
		if(empty($dob)) {
			echo "<font color='red'>DOB field is empty.</font><br/>";
		}
		
		if(empty($phoneNumber)) {
			echo "<font color='red'>DOB field is empty.</font><br/>";
		}
		
		if(empty($address)) {
			echo "<font color='red'>DOB field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO Employee(Name,SSN,DOB,Phone_Number,Address) VALUES('$name','$ssn','$dob','$phoneNumber','$address')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}	
?>
</body>
</html>
