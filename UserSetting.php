<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link rel="stylesheet" href="CSS/theme1.min.css" />
		
	
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <title>MTA User Setting</title>
    </head>
    <body>
    	<div>
			<div data-role="header" data-position="inline" align="center">
				<br /><img title="" alt="" src="" width="100" height="50" /><br />
				<h1>MTA</h1>
			</div>
			
			<div>
				<h1>Detail</h1>
				<hr />
				
				<label id="lblUsername"></label><br />
				<label id="lblEmail"></label><br />
				<label id="lblAge"></label><br />
				
				<h1>Change Password</h1>
				<hr />
				
				<div data-position="inline" align="center">
					<form id="formChangePassword">
						<label id="msgPwd"></label>
						<input id="pwd" type="password" placeholder="Password" onfocus="clearThis(this)"><br />
						<input id="retypePwd" type="password" placeholder="Re-type Password" onfocus="clearThis(this)"><br />
						<input onclick="btnChangePassword()" type="submit" />
					</form> 
				</div>
				<script>
					document.getElementById('lblUsername').innerHTML = 'UsernameNumber1224';
					document.getElementById('lblEmail').innerHTML = 'test@email.com';
					document.getElementById('lblAge').innerHTML = '203 Years Old';
					function btnChangePassword()
					{
						var form = document.getElementById("formChangePassword");
						var pwd = form.elements[0].value;
						var retypePwd = form.elements[1].value;
						switch(pwd)
						{
						case "":
							document.getElementById('msgPwd').innerHTML = "Empty Value! <br />";
							break;
						case retypePwd:
							document.getElementById('msgPwd').innerHTML = "Password Changed! <br />";
							break;
						default:
							document.getElementById('msgPwd').innerHTML = "Does not match! <br />";
						}
					}
					function clearThis(target)
					{
						target.value= "";
					}
				</script>
			</div>
		</div>
    </body>
</html>
