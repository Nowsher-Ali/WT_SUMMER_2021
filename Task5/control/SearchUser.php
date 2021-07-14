
<?php

$radio1=$radio2=$radio3="";
$firstname=$email="";
$address=$dob=$password=$p1=$p2=$p3="";
$c1=$c2=$c3="";


if(isset($_POST['search']))
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchUser($conobj,"student",$_POST["searchuser"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $address=$row["address"];
      $password=$row["password"];
      
      if($row["profession"]=="Academian")
      {
        $p1="Academian";
      }
      else if($row["profession"]=="student")
      {
        $p2="student";
      }
      else if($row["profession"]=="Teacher")
      {
        $p3="Teacher";
      }

      if($row["interests"]=="music" )
      { $c1="checked"; }
      if($row["interests"]=="sports")
      { $c2="checked"; }
      if($row["interests"]=="singing")
      { $c3="checked"; }

      if($row["interests"]=="music,sports")
      { $c1="checked";
        $c2="checked";
      }

      if($row["interests"]=="music,singing")
      { $c1="checked";
        $c3="checked";
      }

      if($row["interests"]=="sports,singing")
      { $c2="checked";
        $c3="checked";
      }

      if($row["interests"]=="music,sports,singing")
      { $c2="checked";
        $c3="checked";
        $c1="checked";
      }
  

      $dob=$row["dob"];
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }

}

?>