<html>

<head>
	<link rel="stylesheet" type="text/css" href="style/feedback.css">
	<title>Feedback</title>
</head>

<body>

	<body background="images/Login.jpg"/>

	<h1>
		<font color="White">Online Study Point</font>
	</h1>

	<h3>
		&emsp;<a href="Home.php">Home</font></a> &ensp; |
		&emsp;<a href="course.php">Course</font></a> &ensp; |
		&emsp;<a href="placements.php">Placements</font></a> &ensp; |
		&emsp;<a href="about us.php">About Study Point</font></a>
	</h3>

<div id="content">
				<h2>Feedback</h2>
					<div class="container">
						<form action="/action_page.php">
							<label for="fname">First Name</label>
							<input type="text" id="fname" name="firstname" placeholder="First Name">

							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lastname" placeholder="Last Name">
                            <label for="country">Country</label>
							<select id="country" name="country">
							<option value="India">India</option>
							<option value="America">America</option>
							<option value="South Asia">South Asia</option>
                            <option value="Iceland">Iceland</option>
                            <option value="France">France</option>
                            <option value="UK">UK</option>
                            <option value="Italy">Italy</option>
							</select>

							<label for="subject">Subject</label>
							<textarea id="subject" name="subject" placeholder="Write Your Feedback.." style="height:200px"></textarea>

							<input type="submit" value="Submit">

						</form>
					</div>
</div>
</body>
</html>