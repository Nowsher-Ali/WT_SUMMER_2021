<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function AddProduct($conn,$table,$pname,$pdesc,$pcate,$pprice,$pimage)
 {
$result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcate',$pprice,'$pimage')");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$DOB,$password,$address,$gender,$prof,$interest)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', address='$address',dob='$DOB',gender='$gender',profession='$prof',password='$password',interests='$interest' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function SearchProduct($conn,$table,$productName)
 {
     $result = $conn->query("SELECT * FROM product WHERE P_Name='$productName'");
     return $result;
 }

 function ShowAllProduct($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
 }

 function SearchUser($conn,$table,$username)
 {
     $result = $conn->query("SELECT * FROM $table WHERE username='$username'");
     return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>