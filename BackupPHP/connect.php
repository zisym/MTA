<?php
ob_start();
session_start(); ?>
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register</title>
</head>

<body>
<form name="registration" method="post" action="file:///C|/Users/TASH/Desktop/registration.php">
  <p>
    <!-- we will create registration.php after registration.html -->  </p>
  <h1> Registration</h1>
  <p>First Name:
    <input type="text" name="fName" value="" id="fName"></br>
  </p>
  <p>Last Name:
    <label for="lName"></label>
    <input type="text" name="lName" id="lName" />
  </p>
  <p>E-mail:
    <input type="text" name="email" value=""></br>
  </p>
  <p>Pasword:
    <input type="text" name="password" value=""></br>
  </p>
  <p>Confirm Password: 
    <input type="text" name="repassword" value="">
  </p>
  <p></br>
    <input type="submit" name="submit" value="submit">
  </p>
</form>
<?php
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['lName']=='' || $_REQUEST['lName']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into user(name,email,password,repassword) values('".$_REQUEST['fName']."', ('".$_REQUEST['lName']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Your Account was successfully created!";
}
Else
{
Echo "There is some problem in creating Your account please check your information";
}

}
}

?>

</body>
</html>