<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        h2{
            margin-top: 100px;
  margin-left: 22.5%;
  width: 77%;
        }
        
        
        </style>
</head>
<body>
    
    
   <h2> <marquee behavior="scroll" direction="left" height="100px">Welcome to Koseli.com   <br> <?php echo $_SESSION['user']['username'] ; ?></marquee></h2>

</body>
</html>
