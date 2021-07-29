<html>
<head>
<script src="js/JSvalidation.js"></script>
</head>
<body>
<h1>Registration Form</h1>
<hr>
<form action="" onsubmit="return validateForm()" method="post">
<table>
				<tr>
				<td>Name :</td>
				<td><input name="fname" id="fname" type="text"> <p id="errorfname" ></p></td>
				</tr>
				
				<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"> <p id="erroremail" ></p></td>
				</tr>
				
				<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="password"> <p id="errorpass" ></p></td>
				</tr>
				
				<tr>
				<td>Comment :</td>
				<td><textarea rows="4" cols="40" id="cmt" name="comment"></textarea> <p id="errorcmt" ></p></td>
				</tr>
				
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
						<p id="errorgender" ></p>
					</td>
				</tr>
			   
				<tr>
					<td>Please Choose a hobby :</td>
					<td>
						<input type="checkbox" id="hobby1" name= "hobby1" value="Singing"> Singing
						<input type="checkbox" id="hobby2" name= "hobby2" value="Dancing"> Dancing
						<input type="checkbox" id="hobby3" name= "hobby3" value="Reading"> Reading
						<p id="errorchkbox" ></p>
					</td>
				</tr>

				<tr>
					<td>Please Choose a file :</td>
					<td>
						<input type="file" id="filetoupload" name="filetoupload">
						<p id="errorfile" ></p>
					</td>
				</tr> 
				
				<tr>
					<td><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td>
				</tr>
			</table>
</form>
</body>
</html>
