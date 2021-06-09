<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$validatecomment="";
$v1=$v2=$v3="";
$name=$email=$password=$gender="";
if(isset($_POST["Submit"]))
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "You must enter name";

}
else
{
    $name=$_REQUEST["fname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You must enter email";
}
else{
    $validateemail= "Your email is ".$email;
}
if(!isset($_REQUEST["Hobby1"]) && !isset($_REQUEST["Hobby2"]) && !isset($_REQUEST["Hobby3"]))
{
    $validatecheckbox = "Please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["Hobby1"]))
   {
       $v1= $_REQUEST["Hobby1"];
   }
   if(isset($_REQUEST["Hobby2"]))
   { 
       $v2= $_REQUEST["Hobby2"];
   }
   if(isset($_REQUEST["Hobby3"]))
   {
    $v3= $_REQUEST["Hobby3"];
   }
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "Please select at least one radio";
}

if(empty($_REQUEST["Password"]) || (strlen($_REQUEST["Password"])<6))
{
    $validatepassword = "Please enter a valid password";
}


if(empty($_REQUEST["Comment"]))
{
    $validatecomment = "Please provide a comment";
}

}
?>