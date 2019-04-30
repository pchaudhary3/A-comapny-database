<?php 
	
	
	include_once("config.php");
    
	$value = $_POST['invoice']; 

	$result = mysqli_query($mysqli, "select Requisition.Invoice_No, Customer_List.Name, Customer_List.Date, Inventory.Product_Type,Inventory.Quantity, Inventory.Price, (Quantity*Price) as Total_Price from Customer_List join Requisition on Customer_List.Customer_ID = Requisition.Customer_ID join Requisition_Inventory on Requisition.Invoice_No=Requisition_Inventory.Invoice_No join Inventory on Requisition_Inventory.Model_No = Inventory.Model_No where Requisition.Invoice_No='$value'");
   
   
    
	while($res = mysqli_fetch_array($result)) 
	{ 
		
		if($res)
		{
			echo "<html>";
			echo"<head>";
			echo"<title>Your invoice</title>";
			echo"<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
  
			echo"<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>";

    		echo"<link rel=\"stylesheet\" href=\"../Get_Invoice.css\">";
			echo"</head>";
			echo"<body>";
			echo "<div id=\"floating_div\">";
			echo "<p id=\"design\"><a href=\"../index.php\">Main page</a>";
			  //echo"<!--<p id="design"><a href="../Get_Invoice.php">See your invoice </a></p>-->";
			echo"</div>";
			echo "<div id=\"header\">";
			echo"	<h1>Customer Invoice</h1>";
			echo"</div>";
			echo "<div id=\"content\">";
			echo"<table>";
			echo"<tr bgcolor='#CCCCCC'>";
			echo"	<td>Invoice No.</td>";
			echo"	<td>Name</td>";
			echo"<td id=\"set_width\">Date</td>";
			echo"<td>Product Name</td>";
			echo"<td>Quality</td>";
			echo"	<td>Price/unit</td>";
			echo"<td>Total Price</td>";
			//echo"	<!--<td>Total Price</td>-->";
			echo"</tr>";
			echo "";
			echo "<tr>";
			echo "<td>".$res['Invoice_No']."</td>";
			echo "<td>".$res['Name']."</td>";
			echo "<td>".$res['Date']."</td>";
			echo "<td>".$res['Product_Type']."</td>";
			echo "<td>".$res['Quantity']."</td>";	
			echo "<td>".$res['Price']."</td>";	
			echo "<td>".$res['Total_Price']."</td>";
			echo "</table>";
			echo "</div>";
			echo "<div id=\"footer\">";
			echo " <h6>Created by: Prachi Chaudhary, Ryan Newton and Jared Melton </h6>";
			echo "</div>";
			echo "</body>";
			echo "</html>";
		}
		
		else
		{//echo "true";
			
		
		}
	}

	
?>
	


