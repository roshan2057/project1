
<?php

function db_connect() {
    $db['host'] = "localhost";
    $db['username'] = "root";
    $db['password'] = "";
    $db['db_name'] = "koseli";
    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


 
function find_user_by_username($email)
{
    $conn= db_connect();
    $sql = "SELECT * FROM user where email='$email' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function register_new_user($usertype, $name, $username, $password, $email,$phone, $address,$gender)
{

    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO user (usertype, name,username,password,email,phone,address,gender) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param ('isssssss', $usertype, $name, $username, $password, $email,$phone, $address,$gender);
    


    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}


function view_users()
{
$conn = db_connect();
$sql = "SELECT * from user where usertype='1'";
$result = $conn->query($sql);
$conn->close();
if($result->num_rows > 0)
{
    return $result;
}
else
{
    return false;
}

}


function view_staff()
{
$conn = db_connect();
$sql = "SELECT * from user where usertype='2'";
$result = $conn->query($sql);
$conn->close();
if($result->num_rows > 0)
{
    return $result;
}
else
{
    return false;
}

}

/*

function send_courier($sname,$semail,$sphone,$saddress,$slocation,$rname,$remail,$rphone,$raddress,$rlocation,$weight,$date,$target)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO courier (sname,semail,sphone,saddress,slocation,rname,remail,rphone,raddress,rlocation,weight,date,target) values(?, ?, ?,?, ?, ?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssssis',$sname,$semail,$sphone,$saddress,$slocation,$rname,$remail,$rphone,$raddress,$rlocation,$weight,$date,$target);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
?>
*/