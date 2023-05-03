<html>
<head>
<title>EXPERIMENT-23     </title>
</head>
<body>
<h2>Student Registration Form</h2>
<form method="post" action="register.php">
<label for="name">Name:</label>
<input type="text" name="name" id="name" required><br><br>
<label for="email">Email:</label>
<input type="email" name="email" id="email" required><br><br>
<label for="password">Password:</label>
<input type="password" name="password" id="password" required><br><br>
<label for="gender">Gender:</label>
<input type="radio" name="gender" value="male" required> Male
<input type="radio" name="gender" value="female"> Female<br><br>
<label for="course">Course:</label>
<select name="course" required>
<option value="">Select Course</option>
<option value="B.Tech">B.Tech</option>
<option value="M.Tech">M.Tech</option>
<option value="BBA">BBA</option>
<option value="MBA">MBA</option>
</select><br><br>
<input type="submit" name="submit" value="Register">
</form>
</body>
</html>
