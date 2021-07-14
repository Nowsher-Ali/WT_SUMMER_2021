<?php include "../control/SearchProduct.php"; ?>
<!DOCTYPE html>
<html>
<body>
<h2>View Product</h2>
<form action="" method="post">
<table>
        <tr>
          <td align="left">Enter Product Name: </td>
          <td align="left"><input type="text" name="productName" /></td>
        </tr>

        <tr>
          <td align="left">
            <input type="submit" value="Search by name" name="searchName">
          </td>
        </tr>
    </table>
</form>

<form action="" method="post">
<table>
        <tr>
          <td align="left">
            <input type="submit" value="Show All Product" name="showall">
          </td>
        </tr>
    </table>
</form>
<a href="../view/pageone.php">Back </a>
</body>
</html>
