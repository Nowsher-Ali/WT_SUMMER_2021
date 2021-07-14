<?php
include ('../control/addproductcheck.php');
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Add Product</h2>
<form action="" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td align="left">Product Name: </td>
        <td align="left"><input type="text" name="pname"></td>
    </tr>

    <tr>
        <td align="left">Product Description: </td>
        <td align="left"><input type="text" name="pdesc"></td>
    </tr>

    <tr>
        <td align="left">Product Category: </td>
        <td align="left"><input type="text" name="pcate"></td>
    </tr>

    <tr>
        <td align="left">Product price: </td>
        <td align="left"><input type="number" name="pprice"></td>
    </tr>

    <tr>
        <td align="left">Product Image : </td>
        <td align="left"><input type="file" name="pimage"></td>
    </tr>

    <tr>
        <td align="left">Product Image : </td>
        <td align="left"><input type="submit" name="add" value="ADD Product"></td>
    </tr>
</table>
</form>
<a href="../view/pageone.php">Back </a>
</body>
</html>
