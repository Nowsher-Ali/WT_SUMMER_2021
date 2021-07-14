<?php
include('../model/db.php');

?>
<?php
$pid=$pname=$pdesc=$pcat=$dob=$pprice=$picture="";

if(isset($_POST['searchName']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();


    $userQuery=$connection->SearchProduct($conobj,"product",$_POST["productName"]);
    if ($userQuery->num_rows > 0) 
    {
        echo $userQuery->num_rows." result found";
        echo  "<br><br>";
        // output data of each row
        while($row = $userQuery->fetch_assoc()) 
        {
            $pid=$row["P_id"];
            $pname=$row["P_Name"];
            $pdesc=$row["P_Desc"];
            $pcat=$row["P_Category"];
            $pprice=$row["P_Price"];
            $picture=$row["P_Picture"];

            echo  "PID: ".$pid."<br>";
            echo  "Proudct Name: ".$pname."<br>";
            echo  "Proudct Description: ".$pdesc."<br>";
            echo  "Proudct Category: ".$pcat."<br>";
            echo  "Proudct Price: ".$pprice."<br>";

            $target_file = "$picture";

            echo "<img src=".$target_file.">";
                
            echo  "<br><br>";
        } 
    }
    else 
    {
        echo "0 results";
    }
}
else if(isset($_POST['showall']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();


    $userQuery=$connection->ShowAllProduct($conobj,"product");
    if ($userQuery->num_rows > 0) 
    {
        echo $userQuery->num_rows." result found";
        echo  "<br><br>";
        // output data of each row
        while($row = $userQuery->fetch_assoc()) 
        {
            $pid=$row["P_id"];
            $pname=$row["P_Name"];
            $pdesc=$row["P_Desc"];
            $pcat=$row["P_Category"];
            $pprice=$row["P_Price"];
            $picture=$row["P_Picture"];

            echo  "PID: ".$pid."<br>";
            echo  "Proudct Name: ".$pname."<br>";
            echo  "Proudct Description: ".$pdesc."<br>";
            echo  "Proudct Category: ".$pcat."<br>";
            echo  "Proudct Price: ".$pprice."<br>";
            $target_file = "$picture";

            echo "<img src=".$target_file.">";

            echo  "<br><br>";
        } 
    }
    else 
    {
        echo "0 results";
    }

}
?>