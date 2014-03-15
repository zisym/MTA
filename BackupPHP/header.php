
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="CSS/theme1.min.css" />
<link rel="stylesheet" href="CSS/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="jquerymobile/jquery-1.11.0.min.js"></script>
<script src="jquerymobile/jquery.mobile-1.4.2.min.js"></script>
<script type="text/javascript">
    $(document).bind(
        "mobileinit", function() {
            $.support.cors = true;
            $.mobile.allowCrossDomainPages = true;
        }
    );

    // Listener that will invoke the onDeviceReady() function as soon as phonegap has loaded properly
    document.addEventListener("deviceready", onDeviceReady, false);

    function onDeviceReady() {
        navigator.splashscreen.hide();
        document.addEventListener("backbutton", onBackClickEvent, false); // Adding the back button listener    
    }

    function goTo(url){
        window.location.href=url;
    }
</script>
