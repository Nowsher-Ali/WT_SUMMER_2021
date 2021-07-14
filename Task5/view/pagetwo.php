<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>
<?php include "../control/SearchUser.php"; ?>
<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>

<form action='' method='post'>
    <table>
        <tr>
          <td align="left">Enter username: </td>
          <td align="left"><input type="text" name="searchuser" /></td>
        </tr>

        <tr>
          <td align="left">
            <input type="submit" value="Search" name="search">
            <input type="reset" name="Reset" />
          </td>
        </tr>
    </table>
</form>

<form action='' method='post'>
<table>
    <tr>
        <td align="left">firstname: </td>
        <td align="left"><input type='text' name='firstname' value="<?php echo $firstname; ?>" ></td>
    </tr>

    <tr>
        <td align="left">Email: </td>
        <td align="left"><input type='text' name='email' value="<?php echo $email; ?>" ></td>
    </tr>

    <tr>
        <td align="left">DOB: </td>
        <td align="left"><input type='date' name='dob' value="<?php echo $dob; ?>" ></td>
    </tr>

    <tr>
        <td align="left">Password: </td>
        <td align="left"><input type='text' name='password' value="<?php echo $password; ?>" ></td>
    </tr>

    <tr>
        <td align="left">Address: </td>
        <td align="left"><input type='text' name='address' value="<?php echo $address; ?>" ></td>
    </tr>

    <tr>
        <td align="left">Gender: </td>
        <td align="left">
          <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
          <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
          <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
        </td>
    </tr>

    <tr>
        <td align="left">Profession: </td>
        <td align="left">
          <select name="profession" id="profession">
            <option value='Academian'<?php echo $p1; ?>>Academian</option>
            <option value='student'<?php echo $p2; ?>>student</option>
            <option value='Teacher'<?php echo $p3; ?>>Teacher</option>
          </select>
        </td>
    </tr>

    <tr>
        <td align="left">Interest: </td>
        <td align="left">
            <input type="checkbox" name="i1"  value='music'<?php echo $c1; ?>>music
            <input type="checkbox" name="i2" value='sports'<?php echo $c2; ?>>sports
            <input type="checkbox" name="i3" value='singing'<?php echo $c3; ?>>singing
        </td>
    </tr>

    <tr>
        <td align="left"> <input name='update' type='submit' value='Update'>  </td>
    </tr>

 </table>
     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>

