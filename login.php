<HTML>

<head>
	
	<title>Login</title>
	
	<link rel="stylesheet" href="style/login.css">
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<body background="images/login1.jpg">
		<h1><br>
			<font color="orange">Online Study Point</font>
		</h1></br>
	<div>
		<form method="POST" action="fetch.php">
			<table border="0">
				<tr>
					<td>
					<a href="http://facebook.com" class="fa fa-facebook" target="_blank"></a>
					<a href="http://gmail.com"  class="fa fa-google"></a>
						<h2><center>Log in</center></h2>
					</td>
				</tr>
				<tr>
					<td><input type="Email" name="Email" placeholder="Username or Email" required="" id="txtUser"></td>
				</tr>
				<tr>
					<td><input type="password" name="Password" placeholder="Password" required="" id="txtPass"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" value="Login" onClick="verifyUser(txtUser,txtPass)">
					</td><br>
				</tr>
				<tr>
					<td class="register" align="right"><br><br>

						<font size="2px" ><a href="Register.php"><font color="white">Create an Account</a><font>
							&emsp;&emsp;&emsp;&ensp;
						<font size="2px"><a href="#"><font color="white">Forgot Password</a></font>
					</td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>