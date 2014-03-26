<?php
    header("Content-type: application/json");
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    //$con = mysqli_connect('http://remoteriver.eicp.net/trailercollection/userinfo.php','root','root','trailer_collection');
    $con = mysqli_connect("remoteriver.eicp.net", "guest", "guest", "trailer_collection") or die(mysql_error());
    

    if (!$con){
      die('Could not connect: ' . mysqli_error($con));
    }


    $sql="SELECT * FROM users WHERE email='" . $email . "'";

    $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);


    if ($row = mysqli_fetch_array($result)) {
        if($row[4]==$password){
            $_SESSION["id"]=$row[0];
            $result = "OK";
        }else{
            $result = "Login failed";
        }
    }else{
        $result = "Login failed";
    }

    mysqli_close($con);
    echo json_encode($result);
?>