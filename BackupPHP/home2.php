<?php 
    session_start();
?>
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
        

	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>Home2 - Trailer Collection</h1>
			</div>
			<div data-role="content" data-theme="a">
                HOME2
                
                <?php
                    if($_SESSION["id"])
                        echo "You are logged in.";
                    else
                        echo "welcome a guest user";
                ?>
                
			</div>
		</div>
	</body>
</html>
