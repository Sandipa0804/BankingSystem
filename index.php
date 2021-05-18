<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBank</title>
    <link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
      include 'connection.php';
    
?>

 <nav> 
     <a href='index.php' style="text-decoration:none;color:black;"> Home </a> 
    <a href='Becomeauser.php' style="text-decoration:none;color:black;"> User </a>
    <a href='Transfermoney.php' style="text-decoration:none;color:black;"> MoneyTransfer </a> 
   <a href='TransactionHistory.php' style="text-decoration:none;color:black;"> Transactiondetails </a>
   <a href='contactus.php' style="text-decoration:none;color:black;"> Contactus </a>
</nav>
<div>
    <h1><marquee>Welcome to MyBank</marquee></p></h1>
    </div>
    <div >
        <div>
            <a href='Users.php'><button style= "width:250px;height:50px;">Users</button></a>
        </div>
        <div >
            <a href='Becomeauser.php'><button style= "width:250px;height:50px;">Become a User</button></a>
        </div>
        <div>
            <a href='Transfermoney.php'><button style= "width:250px;height:50px;">Transfer Money</button></a>
        </div>
        <div>
            <a href='TransactionHistory.php'><button style= "width:250px;height:50px;">Transaction History</button></a>
        </div>
    </div>

</body>
</html>

