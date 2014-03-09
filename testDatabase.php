
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <title>MTA</title>
    </head>
    <body>
		<form>
			<label id="displaySomething">some text</label>
		</form>
		
		
		<script>
			var getDataFromDB = 'dfgfdg';
			
			document.getElementById('displaySomething').innerHTML = getDataFromDB;
		</script>
		
		<?php
		$connection = mysqli_connect('remoteriver.eicp.net:3306', 'guest', 'guest', 'trailer_collection') or die (mysql_error());
		
		
			$result = mysqli_query($connection,"SELECT * FROM users");
			while($row = mysqli_fetch_array($result))
		    {
		    	if($row['email'] == "")
				{
					echo $row['email'];
					echo " My account";
					echo "<br>";
				}
				else
				{
					echo $row['email'];
		    		echo "<br>";
				}
		    }
			mysqli_close($connection) or die (mysql_error());
		?>
		
		
	</body>
</html>
