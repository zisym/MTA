<?php
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <?php include "header.php"; ?>

		<title>jQuery Mobile: Theme Download</title>

		<style type="text/css">
		  #apDiv1 {
            position: absolute;
            width: 200px;
            height: 115px;
            z-index: 1;
        }
        </style>
	</head>
	<body>
        <?php
            //error_reporting(E_ALL);
            //ini_set('display_errors', 1);

           
            if ($_REQUEST['guest'] == 1) {
                $_SESSION['guest']=1;
            } else {
                $connection = mysqli_connect('remoteriver.eicp.net', 'guest', 'guest', 'trailer_collection');

                $sql = "SELECT * FROM users where (id='".$_REQUEST['username']."' or email = '".$_REQUEST['username']."') and password='".$_REQUEST['password']."'" ;
                $result = mysqli_query($connection, $sql);
                $rows = mysqli_num_rows ($result);
                
                if ($rows != 0){
                    while($row = mysqli_fetch_array($result))
                    {
                        $userinfo['id'] = $row['id'];
                        $userinfo['fname'] = $row['firstname'];
                        $userinfo['lname'] = $row['lastname'];
                        $userinfo['email'] = $row['email'];
                        $_SESSION['id']=$id;
                        $_SESSION['guest']=0;
                    }
                }else{
                    header ("location: index.html");
                }
                mysqli_close($connection) or die (mysql_error());
            }
           
          ?>
	
    <div data-role="page" data-theme="a">
      <div data-role="header" >
        <h1>Page Title</h1>
          <?php
                if ($_REQUEST['guest'] == 0)
                    echo "<a href='#' class='ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-gear'>Options</a> </div>";
                else
                    echo "<a href='index.html' class='ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right'>Login</a> </div>";
            
            ?>
      <div data-role="content" data-theme="a">
      
          <?php
            if ($_SESSION['guest'] == 0){
            echo "
              <div>
                <p>WELCOME, ".$userinfo['fname'].".</p>
              </div>
              ";
            }else{
                echo "
              <div>
                <p>WELCOME, Guest.</p>
              </div>
              ";
            }
            ?>
        <div>
        <h4>Newest</h4>
          <iframe src="newest_movies.php" frameborder=0 seamless="" width="100%" height="610px"/>
         
        </div>
         <div>
        <h4>Popular </h4>
          <iframe src="newest_movies.php" width="100%" height="610px"/>

        
         
        </div>
         <div>
        <h4>Classic </h4>
          <iframe src="newest_movies.php" width="100%" height="610px"/>

        
         
        </div>
        
      </div>
    </div>
    </body>
</html>
