<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is tracking page</title>
    <style>
        h2{
            margin-top: 100px;
  margin-left: 22.5%;
  width: 77%;
        }
        
        
        </style>
</head>
<body>
    
    
   <h2> <marquee behavior="scroll" direction="left" height="100px">Welcome to Tracking Page  <br><?php echo $_SESSION['admin']['user_name']?></marquee></h2>

</body>
</html>
