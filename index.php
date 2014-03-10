<!DOCTYPE html>
<html>
    <head>
	<?php include "header.php"; ?>
    <title>Trailer Collection</title>    
    </head>>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>Login</h1>
			</div>
			<div data-role="content" data-theme="a">
                <form action="videolist.php" method="get">
                    Username or email address: <input type="text" name="username"><br>
                    Password: <input type="text" name="password"><br>
                    <input type="submit" value="Login" >
                    
                    <!--check DB  -->
                    <!-- for more than 2nd attempt, display "forgot your password?" message -->

                    <input type="button" value="Guest" onClick="goTo('videolist.php?guest=1')">
                    <input type="button" value="Register" onClick="goTo('register.html')">
                </form>
			</div>
		</div>
	</body>
</html>
