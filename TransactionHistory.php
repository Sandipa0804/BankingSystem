<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransactionHistory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><link rel="stylesheet"
     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    h2{
        text-align:center;
        padding:20px;
        font-size:30px;
    }
    </style>
</head>
<body>
<?php
include 'connection.php';
$sql = "SELECT * FROM history";
$result = mysqli_query($conn,$sql);
?>
<div>
<h2>Transaction History</h2>
<br>
<div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">sno</th>
                            <th scope="col" class="text-center py-2">From</th>
                            <th scope="col" class="text-center py-2">To</th>
                            <th scope="col" class="text-center py-2">Amount</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        
                        <td class="py-2"><a href="logic.php?id= <?php echo $rows['sno'] ;?>"><?php echo $rows['sno'] ?></a></td>
                        <td class="py-2"><a href="logic.php?id= <?php echo $rows['sno'] ;?>"><?php echo $rows['sender'] ?></a></td>
                        <td class="py-2"><a href="logic.php?id= <?php echo $rows['sno'] ;?>"><?php echo $rows['receiver'] ?></a></td>
                        <td class="py-2"><a href="logic.php?id= <?php echo $rows['sno'] ;?>"><?php echo $rows['balance'] ?></a></td>

                        
                        <td><a href="operations.php?id= <?php echo $rows['sno'] ;?>"> <button type="button" class="btn"><img src="img/debit-card.png" width="25" height="auto"> Transact</img></button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
</div>
    
</body>
</html>