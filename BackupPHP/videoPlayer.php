<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0058)file:///C:/Users/TASH/Desktop/videos-pack/mobile/test.html -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>MTA Trailer Collection</title>
		<style>
        	body {
				background-color: #666;
        	}

			.container {
				width: 100%;
			}
			.vendor {
				padding: 1%;
				background: #d1eed1;
				margin-bottom: 1em;
			}
			.inputComments {
				width: 100%; !important
			}
        </style>
	</head>
	<body>
	<h1 align="center">Video Page</h1>
	 	<div class="container">
        	<div class="vendor">
        		<iframe title="Video Title" height="349" width="100%" src="http://www.youtube.com/embed/29kERg4T9Vc" frameborder="0" 
            	allowfullscreen=""></iframe><br />
            	<p>this is the description<p>
            </div>
    	</div>
		<script type="text/javascript">
		   	var newtext = "";
		    function addtext()
		    {
		    	newtext = newtext + "<div class='vendor'><span style='color:purple;'>Tashana:</span><hr />" + document.myform.inputbox.value + "<hr /></div>";
		    	document.getElementById('returnValue').innerHTML = newtext;
	    	}
	    </script>
	    
	    <form name="myform">Comment: <br />
	      <textarea class="inputComments" name="inputbox"></textarea>
	      <input TYPE="button" NAME="button" Value="Check" onClick="addtext()">
	    </form>
		<div class="container">
	        <div>
	        	<div id=returnValue>
		    	</div>
			</div>
		</div>
	</body>
</html>
