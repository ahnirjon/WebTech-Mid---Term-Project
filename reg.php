<!--

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
    <form action="filewrite.php" method="post">
        <fieldset style="display: inline-block">
            <legend>REGISTRATION</legend>

           
            Id <br><input type="text" size="30" name="user_id"><br>
            Password <br><input type="password" size="30" name="password1"><br>
            Confirm Password <br><input type="password" size="30" name="password2"><br>
            Name <br><input type="text" size="30" name="name"><br>
            Email <br><input type="email" size="30" name="email"><br>
			User Type<br>
			<select name="user_type">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select><br>
			<hr>
            <input type="submit" name="submit" value="Register"> <a href="filewrite.php">Login</a>
        </fieldset>
    </form>
</body>
</html> -->

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="filewrite.php" method="post">
            <table border="0" width="100%">
                <tr height="15%" bgcolor="#553819">
                    <td width="20%"></td>
                    <td valign="top"> <h2> <b> <font color="#ec9000">E-VARSITY</font><font color="white">OPENCOURSEWARE</font> </b> </h2>
                        <td width="30%" valign="top" align="right">
                            <a href="http://www.facebook.com/">
                                <img src="Logos/fb.png" width="40" height="40" alt="Click to visit our facebook page">
                            </a>
                            <a href="http://www.twitter.com/">
                                <img src="Logos/twitter.png" width="40" height="40" alt="Click to visit our twitter page">
                            </a>
                            <a href="http://www.youtube.com/">
                                <img src="Logos/youtube.png" width="40" height="40" alt="Click to visit our youtube page">
                            </a>
                            <a href="http://www.wikipidia.com/">
                                <img src="Logos/wiki.png" width="40" height="40" alt="Click to visit our wikipidia page">
                            </a> <br/><br/>
                            <a href="login.php"><font color="white">Login</font></a>&nbsp;&nbsp;<font color="white">|</font>&nbsp;&nbsp;
                            <a href="reg.php"><font color="white">Registration</font></a>
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
                            <img src="Logos/homepagelogo.png" width="40" height="40">
                        </a>
                    </td>
                    <td>
                        <font color="lightBlue"> <h3>Registration</h3> </font>
                    </td>
                    <td width="20%"></td>
                </tr>
            </table>
            <table border="0" width="100%">
                <td width="20%"></td>
                <td>
                    <table border="0" width="100%">
                        <tr>
                            <td>
                                Id <br><input type="text" size="30" name="user_id"><br>
                                Password <br><input type="password" size="30" name="password1"><br>
                                Confirm Password <br><input type="password" size="30" name="password2"><br>
                                Name <br><input type="text" size="30" name="name"><br>
                                Email <br><input type="email" size="30" name="email"><br>
                               
                                <hr>
                                <input type="submit" name="submit" value="Register"><!-- <a href="filewrite.php">Login</a>-->
                            </td>
                        </tr>
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
                            <li> <a href="about.php"><font color="#de312d">About OpenCourseWare </font> </a> </li>
                            <li> <a href="help.php"><font color="#de312d">Help & FAQs </font> </a> </li>
                            <li> <a href="contact.php"><font color="#de312d">Contact Us </font> </a> </li>
                            <li> <a href="privacy.php"><font color="#de312d">Privacy & Terms of Use </font> </a> </li>
                        </ul>
                        <vr>
                    </td>
                    <td width="25%" valign="top">
                        <table border="0">
                            <tr>
                                <td valign="top">OUR CORPORATE SUPPORTERS</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://www.accenture.com/us-en/">
                                    <img src="Logos/accenture.png" width="150" height="70" alt="Click to visit our facebook page">
                                    </a>
                                    <a href="https://www.mathworks.com/">
                                    <img src="Logos/mathworks.png" width="150" height="70" alt="Click to visit our facebook page">
                                    </a><br/>
                                    <a href="https://www.dow.com/en-us/">
                                    <img src="Logos/dow.png" width="150" height="70" alt="Click to visit our facebook page">
                                    </a>
                                    <a href="http://www.abinitio.com/en/">
                                    <img src="Logos/abinito.png" width="150" height="70" alt="Click to visit our facebook page">
                                    </a>
                                </td>
                            </tr>
                        </table>
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
