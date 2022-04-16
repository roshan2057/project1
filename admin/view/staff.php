<?php
    include 'model/dbmodel.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
    <style>
        body {
            margin: 50px;
    position: relative;
    left: 23rem;
    width: 45%;
        }
table {
    width: 155%;
}
.user {
    position: relative;
    left: 60%;
    margin: 20px;
   
}

        </style>
</head>
<body>
  
    <div class="user">
    <h1>STAFF</h1>
</div>

    <div class="box">
    <?php
    $users = view_staff();
if($users)
$i=0;
echo"
<table border=1 style=text-align:center>


   <tr>
        <th> S.N</th>
        <th> Name</th>
        <th> Username</th>
        <th> Email</th>
        <th>Phone</th>
        <th> Address</th>
        <th> Gender</th>
        <th colspan=2> Action</th>
</tr>";
while ($row = $users->fetch_assoc()) {
    $i++;
    echo"
    <tr>
       
        <td>".$i."</td>
        <td>". $row["name"] ."</td>
        <td>". $row["username"] ."</td>
        <td>". $row["email"] ."</td>
        <td>". $row["phone"] ."</td>
        <td>". $row["address"] ."</td>
        <td>". $row["gender"] ."</td>
        <td>  <a href=delete>Edit</a> </td>
        <td>  <a href=delete>Delete</a> </td>
    
</tr>";
}


echo "</table>";
?>

</div>
</body>
</html>