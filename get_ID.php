<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
         <link rel="stylesheet" href="get_ID.css">
    </head>
    <body>
        <div id="header">
        <h1>Invoice</h1>    
        </div>
        <div id="floating_div">
          <p id="design"><a href="index.php">Home </a>
        </div> 
        <div id="content">
        <form action="Get_Invoice.php" method="post">
            Enter your Invoice: 
        <input type="text" placeholder="Enter your invoice" id="entered_Invoice" name="invoice"/>
        <button id="submit_No">Submit</button>
        </form>
           
        </div>
        
<div id="footer"><br/>
  <h6>Created by: Prachi Chaudhary, Ryan Newton and Jared Melton </h6>
</div>
        
    </body>
</html>
