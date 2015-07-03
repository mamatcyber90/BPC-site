<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Brodie Park Crossfit" />
	<meta name="keywords" content="Brodie Park, Brodie Park Crossfit, Crossfit Austin, Crossfit TX, South Austin Crossfit, Crossfit, Crossfit Kids, crossfight" />
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
    
     <div id="sched" class="content">
    	
        <div class="col" id="singlecol">
        	<h1>Weekly Training Schedule</h1>
            
            <span class="right"><em>Classes last 45 minutes</em></span>
            <h3 id="women-only-classes">Indoor Classes</h3>
            <br />
            
            <ul class="training-calendar">
            	<li id="times"> &nbsp;</li>
                <li><strong class="blue">SUNDAY</strong></li>
                <li><strong class="blue">MONDAY</strong></li>
                <li><strong class="blue">TUESDAY</strong></li>
                <li><strong class="blue">WEDNESDAY</strong></li>
                <li><strong class="blue">THURSDAY</strong></li>
                <li><strong class="blue">FRIDAY</strong></li>
                <li><strong class="blue">SATURDAY</strong></li>
            </ul>
            <br />
            
            <ul class="training-calendar">
          		<li id="times">
                	<ul>
                    	<li>5:30 AM</li>
                        <li>6:15 AM</li>
                        <li>9:00 AM</li>
                        <li>12:00 PM</li>
                        <li>4:00 PM</li>
                        <li>5:15 PM</li>
                        <li>6:00 PM</li>
                        <li>6:45 PM</li>
						<li>6:45 PM - ASL</li>
                        <li>7:30 PM</li>
                    </ul>
                </li>
                <li>
                	<ul id="sunday">
                    	<li><a href="#">NO CLASS</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
						<li></li>
                        <li></li>
                    </ul>
                </li>
            	<li>
                	<ul id="monday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
						<li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="tuesday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
						<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                    </ul>
                </li>
                <li>
                	<ul id="wednesday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
						<li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="thursday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
						<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                    </ul>
                </li>
                <li>
                	<ul id="friday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
						<li></li>
                        <li></li>
                    </ul>
                </li>
                <li>
                	<ul id="saturday">
                    	<li></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">FREE CLASS</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
						<li></li>
                        <li></li>
                    </ul>
                </li>
            </ul>
            
            <div class="member-pricing">
            	<div class="fine-print">
                    *ASL-American Sign Language.
                    <br />
                </div>
            </div>
			<div class="clear"></div>
			<br />
			<br />
			
            <span class="right"><em>Classes last 45 minutes during the week and 90 minutes on Saturday</em></span>
            <h3 id="women-only-classes">Indoor Strength Classes</h3>
            <br />
            
            <ul class="training-calendar">
            	<li id="times"> &nbsp;</li>
                <li><strong class="blue">SUNDAY</strong></li>
                <li><strong class="blue">MONDAY</strong></li>
                <li><strong class="blue">TUESDAY</strong></li>
                <li><strong class="blue">WEDNESDAY</strong></li>
                <li><strong class="blue">THURSDAY</strong></li>
                <li><strong class="blue">FRIDAY</strong></li>
                <li><strong class="blue">SATURDAY</strong></li>
            </ul>
            <br />
            
            <ul class="training-calendar">
          		<li id="times">
                	<ul>
						<li>5:30 AM</li>
                    	<li>10:30 AM</li>
                        <li>6:45 PM</li>
                    </ul>
                </li>
                <li>
                	<ul id="sunday">
                    	<li><a href="#">NO CLASS</a></li>
                        <li></li>
						<li></li>
                    </ul>
                </li>
            	<li>
                	<ul id="monday">
						<li></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="tuesday">
						<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="wednesday">
						<li></li>
                        <li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="thursday">
						<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="friday">
						<li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="saturday">
						<li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li></li>
                    </ul>
                </li>
            </ul>
            
			<br />
            <span class="right"><em>2 class program: Mandatory introductory classes for beginngers on all CrossFit points of performance.</em></span>
            <h3 id="boot-camps">Elements</h3>
            <br />
            
            <ul class="training-calendar">
            	<li id="times"> &nbsp;</li>
                <li><strong class="blue">SUNDAY</strong></li>
                <li><strong class="blue">MONDAY</strong></li>
                <li><strong class="blue">TUESDAY</strong></li>
                <li><strong class="blue">WEDNESDAY</strong></li>
                <li><strong class="blue">THURSDAY</strong></li>
                <li><strong class="blue">FRIDAY</strong></li>
                <li><strong class="blue">SATURDAY</strong></li>
            </ul>
            <br />
            
            <ul class="training-calendar">
          		<li id="times">
                	<ul>
                    	<li></li>
                    </ul>
                </li>
                <li>
                	<ul id="sunday">
                    	<li><a href="#">NO CLASS</a></li>
                    </ul>
                </li>
            	<li>
                	<ul id="monday">
                        <li><a id="mon" class="now">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="tuesday">
                    	<li><a id="tues" class="now">SIGN UP</a></li>    
                    </ul>
                </li>
                <li>
                	<ul id="wednesday">
                        <li><a id="wed" class="now">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="thursday">
                    	<li><a id="thurs" class="now">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="friday">
                        <li><a id="thurs" class="now">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="saturday">
                    	<li></li>
                    </ul>
                </li>
            </ul>           
            
            
            <br />
            
            <span class="right"><em>Hybrid class consisting of Muay Thai (cardio kickboxing) and CrossFit.</em></span>
            <h3 id="boot-camps">Crossfight</h3>
            <br />
            
            <ul class="training-calendar">
            	<li id="times"> &nbsp;</li>
                <li><strong class="blue">SUNDAY</strong></li>
                <li><strong class="blue">MONDAY</strong></li>
                <li><strong class="blue">TUESDAY</strong></li>
                <li><strong class="blue">WEDNESDAY</strong></li>
                <li><strong class="blue">THURSDAY</strong></li>
                <li><strong class="blue">FRIDAY</strong></li>
                <li><strong class="blue">SATURDAY</strong></li>
            </ul>
            <br />
            
            <ul class="training-calendar">
          		<li id="times">
                	<ul>
                    	<li>6:15 AM</li>
                        <li>12:00 PM</li>
                        <li>5:15 PM</li>
                    </ul>
                </li>
                <li>
                	<ul id="sunday">
                    	<li><a href="#">NO CLASS</a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
            	<li>
                	<ul id="monday">
                    	<li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="tuesday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    	<li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="wednesday">
                    	<li></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                        <li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="thursday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    	<li></li>
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                <li>
                	<ul id="friday">
						<li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                <li>
                	<ul id="saturday">
                    	<li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
            </ul>
            
            <br />
            <span class="right"><em>40 minute class for ages 6-11</em></span>
            <h3 id="boot-camps">Crossfit Kids</h3>
            <br />
            
            <ul class="training-calendar">
            	<li id="times"> &nbsp;</li>
                <li><strong class="blue">SUNDAY</strong></li>
                <li><strong class="blue">MONDAY</strong></li>
                <li><strong class="blue">TUESDAY</strong></li>
                <li><strong class="blue">WEDNESDAY</strong></li>
                <li><strong class="blue">THURSDAY</strong></li>
                <li><strong class="blue">FRIDAY</strong></li>
                <li><strong class="blue">SATURDAY</strong></li>
            </ul>
            <br />
            
            <ul class="training-calendar">
          		<li id="times">
                	<ul>
                    	<li>4:45 PM</li>
                    </ul>
                </li>
                <li>
                	<ul id="sunday">
                    	<li><a href="#">NO CLASS</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="monday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="tuesday">
                    	<li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="wednesday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="thursday">
                    	<li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="friday">
                    	<li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="saturday">
                    	<li></li>
                    </ul>
                </li>
            </ul>
            
            <br />
            <span class="right"><em>45 minute class for ages 12-19</em></span>
            <h3 id="boot-camps">Crossfit Teens</h3>
            <br />
            
            <ul class="training-calendar">
            	<li id="times"> &nbsp;</li>
                <li><strong class="blue">SUNDAY</strong></li>
                <li><strong class="blue">MONDAY</strong></li>
                <li><strong class="blue">TUESDAY</strong></li>
                <li><strong class="blue">WEDNESDAY</strong></li>
                <li><strong class="blue">THURSDAY</strong></li>
                <li><strong class="blue">FRIDAY</strong></li>
                <li><strong class="blue">SATURDAY</strong></li>
            </ul>
            <br />
            
            <ul class="training-calendar">
          		<li id="times">
                	<ul>
                    	<li>6:00 PM</li>
                    </ul>
                </li>
                <li>
                	<ul id="sunday">
                    	<li><a href="#">NO CLASS</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="monday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="tuesday">
                    	<li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="wednesday">
                    	<li><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=23361" target="_blank">SIGN UP</a></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="thursday">
                    	<li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="friday">
                    	<li></li>
                    </ul>
                </li>
                
                <li>
                	<ul id="saturday">
                    	<li></li>
                    </ul>
                </li>
            </ul>
			
            
        </div>
    	
        <div class="clear"></div>
    
    </div>   
    
</div>


<?php include("php/footer.php"); ?>

</body>
</html>