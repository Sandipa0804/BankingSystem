<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactus</title>
    <style>
    body{
       background-color: silver;
        margin:5px;
    }
    input{
        display:block;
        width:300px;
        padding:10px;
        border:2px, solid black;
        margin-bottom:20px;
        float:center;
    }
    form{
        padding:20px;
        margin:5px;
    }
    button{
        display:block;
        padding:20px;
    }
    .container{
        padding:10px;
    }
    h2{
        text-align:center;
        font-size:50px;
    }
    </style>
</head>
<body>
<div class="container">
<h2>Contact us</h2>
<form>
<input placeholder="NAME" type="text" name="name" required>
<input placeholder="EMAIL" type="text" name="email" required>
<textarea placeholder="MESSAGE" rows="5" cols="50" name="message"></textarea>
<button>Submit</button>
</form>
</div>
    
</body>
</html>