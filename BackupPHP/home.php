<?php
    ob_start(); 
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
				<h1>Home - Trailer Collection</h1>
			</div>
			<div data-role="content" data-theme="a">
                Welcome to Trailer Collection!
                <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                   $connection = mysqli_connect('remoteriver.eicp.net', 'guest', 'guest', 'trailer_collection');
                    

                    $sql = "SELECT * FROM users where (id='".$_REQUEST['username']."' or email = '".$_REQUEST['username']."') and password='".$_REQUEST['password']."'" ;
                   $result = mysqli_query($connection, $sql);
                    
                    if (mysqli_num_rows ($result)){
                        while($row = mysqli_fetch_array($result))
                        {
                            $id = $row['id'];
                            $_SESSION['id']=$id;
                        }
                    }else{
                        header ("location: index.html");
                    }
                   mysqli_close($connection) or die (mysql_error());

                  ?>
                <!-- <?php var_dump($result); ?> -->
                
                <a href="home2.php">Go TO NEXT</a>
			</div>
		</div>
	</body>
</html>
