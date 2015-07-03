<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Brodie Park Crossfit" />
	<meta name="keywords" content="Brodie Park, Brodie Park Crossfit, Crossfit Austin, Crossfit TX, South Austin Crossfit, Crossfit, Crossfit Kids, crossfight" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Brodie Park Crossfit | Austin, TX</title>
	<link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css' />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
	<script src="js/element_sign_up.js" type="text/javascript"></script>
	<script type="text/javascript">
	  $(function(){
	
	    var url = window.location.pathname, 
	        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
	        // now grab every link from the navigation
	        $('ul.main-navigation li a').each(function(){
	            // and test its normalized href against the url pathname regexp
	            if(urlRegExp.test(this.href.replace(/\/$/,''))){
	                $(this).addClass('active');
	            }
	        });
	
	});
	</script>
	
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/blocker.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/x-icon" href="http://www.brodieparkcrossfit.com/favicon.ico">
	<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<div id="main_background">
	<img src="images/background.jpg" alt="background">
</div>	
<div class="body-container">

	<?php include("php/header.php"); ?>
    <?php include("php/navigation.php"); ?>

    <div id="input_container">
		<div id="close">X</div>	
		<h2>Sign Up</h2>
		<p id="succ_message">Thank You! <br> A confirmation will be sent within 24 hours. <br><br>Redirecting in <span id="count_down">5</span></p>
		<form>
			<label id="name_label" for="name">Full name:</label>
			<input id="name" type="text" name="name"><br>
			
			<label id="email_label" for="email">Email:</label>
			<input id="email" type="text" name="email">
			
			<label id="phone_label" for="phone">Phone#:</label>
			<input id="phone" type="text" name="phone">
			
			<button id="sign_up_button" type="button">SIGN UP</button>
		</form>
	</div>
    
    <div class="content">
    	
        <div class="col" id="singlecol">
        	<h1>Contact Us</h1>
            
            <div class="map">
            	<iframe width="440" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=9100+brodie+lane+austin&amp;ie=UTF8&amp;hq=&amp;hnear=9100+Brodie+Ln,+Austin,+Texas+78749&amp;gl=us&amp;t=m&amp;ll=30.193286,-97.843723&amp;spn=0.022256,0.03768&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                <small><a href="http://maps.google.com/maps?q=9100+brodie+lane+austin&amp;ie=UTF8&amp;hq=&amp;hnear=9100+Brodie+Ln,+Austin,+Texas+78749&amp;gl=us&amp;t=h&amp;ll=30.193286,-97.843723&amp;spn=0.022256,0.03768&amp;z=14&amp;iwloc=A&amp;source=embed" target="_blank">View Larger Map</a></small>
            </div>
            
            <h3>Our Address</h3>
            
            <p>9001 Brodie Lane C-9
            <br />Austin, Texas 78748</p>
            
            <p><strong>Questions? Give us a call:</strong>
            <br />512.280.1308
            <br /><br /><strong>or email us:</strong>
            <br /><a href="mailto:info@brodieparkcrossfit.com">info@brodieparkcrossfit.com</a></p>
            
            <h3>Connect with BPC</h3>
            
            <p>
            Facebook <a href="http://www.facebook.com/BrodieParkCrossFit" target="_blank">@BrodieParkCrossFit</a>
            <br />Twitter <a href="http://twitter.com/#!/brodieparkxfit" target="_blank">@brodieparkxfit</a>
            <br />YouTube <a href="http://www.youtube.com/BrodieParkCrossFit" target="_blank">@BrodieParkCrossFit</a>
            </p> 
        </div>
    	
        <div class="clear"></div>
    
    </div>   
    
</div>

<?php include("php/footer.php"); ?>

</body>
</html>
