<html>
	<head>
		<title>Home page</title>
	</head>
	<body>
		<form>
			<table border="0" width="100%">
				<tr height="15%" bgcolor="#553819">
					<td width="20%"></td>
					<td valign="top"> <h1> <b> <font color="white">name of website</font> </b> </h1>
						<td width="30%" valign="top" align="right">
							<a href="http://www.facebook.com/">
								<img src="fb.png" width="40" height="40" alt="Click to visit our facebook page">
							</a>
							<a href="http://www.twitter.com/">
								<img src="twitter.png" width="40" height="40" alt="Click to visit our twitter page">
							</a>
							<a href="http://www.youtube.com/">
								<img src="youtube.png" width="40" height="40" alt="Click to visit our youtube page">
							</a>
							<a href="http://www.wikipidia.com/">
								<img src="wiki.png" width="40" height="40" alt="Click to visit our wikipidia page">
							</a> <br/><br/>
							<!--<a href="login.html"><font color="white">Login</font></a>&nbsp;&nbsp;<font color="white">|</font>&nbsp;&nbsp;
							<a href="registration.html"><font color="white">Registration</font></a>-->

							<?php echo "<h3>Welcome ".$_GET['userName']."</h3>"?>
						</td>
					</td>
					<td width="20%"></td>
				</tr>
			</table>
			<table border="0" width="100%">
				<tr height="7" bgcolor="#3d1f05">
					<td width="20%"></td>
					<td width="40" height="40">
						<a href="homePage.php">
							<img src="homepagelogo.png" width="40" height="40">
						</a>
					</td>
					<td>
						<a href="findCourse.php"><font color="lightBlue"> <h3>Find course</h3> </font></a>
					</td>
					<td width="20%"></td>
				</tr>
			</table>
			<table border="0" width="100%">
				<td width="20%"></td>
				<td>
					<table border="0" width="100%">
						<td>eikhane toder code korte hobe</td>
					</table>
				</td>
				<td width="20%"></td>
			</table>
			<hr size="3" color="black"/>
			<table border="0" width="100%">
				<tr>
					<td width="20%"></td>
					<td width="35%">
						<h2> <b> About </b> </h2>
						<ul type="circle">
							<li> <a href="help.php"><font color="#de312d">About OpenCourseWare </font> </a> </li>
							<li> <a href="help.php"><font color="#de312d">Help & FAQs </font> </a> </li>
							<li> <a href="help.php"><font color="#de312d">Contact Us </font> </a> </li>
							<li> <a href="help.php"><font color="#de312d">Privacy & Terms of Use </font> </a> </li>
						</ul>
						<vr>
					</td>
					<td width="25%">
						
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td width="20%"></td>
					<td colspan="2">
						<hr>
					</td>
					<td width="20%"></td>
				</tr>
			</table>
		</form>
	</body>
</html>