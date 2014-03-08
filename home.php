<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trailer Collection</title>
		<link rel="stylesheet" href="CSS/theme1.min.css" />
		<link rel="stylesheet" href="CSS/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile.structure-1.4.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
        
        <?php
            session_start();
            require_once('includes.php');

            //Connect to server
            $link = mysql_connect($host, $user, $pw) or die(mysql_error());

            //Select the database
            mysql_select_db ($db);

            // Get the login credentials from user
            $username = $_POST['username'];
            $userpassword = $_POST['password'];

            // Secure the credentials
            $username = mysql_real_escape_string($_POST['username']);
            $userpassword = mysql_real_escape_string($_POST['password']);

            // Check the users input against the DB.
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$userpassword'";
            $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
            $count = mysql_num_rows($result);
            if ($count == 1)
            {
                $_SESSION['loggedIn'] = "true";
                header("Location: menu.html");
            // I also tried the whole URL here, but same result.
            }
            else{
                $_SESSION['loggedIn'] = "false";
                echo "<p>Login failed, username or password incorrect.</p>";
            }

        
        ?>

	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>Home - Trailer Collection</h1>
			</div>
			<div data-role="content" data-theme="a">
                Welcome to Trailer Collection!
			</div>
		</div>
	</body>
</html>
