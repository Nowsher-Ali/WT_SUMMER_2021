<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
</head>
  <body>
    <h1>Registration Form</h1>
    <hr>
    <form>
      <table>
        <tr>
          <td align="left">Full Name:</td>
          <td align="left"><input type="text" name="Full Name" /></td>
        </tr>
        <tr>
          <td align="left">Email:</td>
          <td align="left"><input type="text" name="Email" /></td>
        </tr>
        <tr>
          <td align="left">Password:</td>
          <td align="left"><input type="password" name="Password" /></td>
        </tr>

        <tr>
          <td align="left">Comment:</td>
          <td align="left">
            <textarea name="Comment" id="" cols="30" rows="10"></textarea>
          </td>
        </tr>

        <tr>
          <td align="left">Gender:</td>
          <td align="left">
            <input type="radio" name="my gender" />Female
            <input type="radio" name="my gender" />Male
            <input type="radio" name="my gender" />Other
          </td>
        </tr>

        <tr>
          <td align="left">Please choose a hobby</td>
          <td align="left">
            <input type="checkbox" name="Hobby1" />Singing
            <input type="checkbox" name="Hobby2" />Dancing
            <input type="checkbox" name="Hobby3" />Reading
          </td>
        </tr>

        <tr>
          <td align="left">Please choose a file</td>
          <td align="left"><input type="file" name="File" /></td>
        </tr> 

        <tr>
          <td align="left">
            <input type="submit" name="Submit" />
            <input type="reset" name="Reset" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
