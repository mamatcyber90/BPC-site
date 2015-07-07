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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
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
        	<h1>BPC Membership Fees</h1>
            
            <div class="member-pricing gray">
            	<div class="membership"><strong>Membership Package</strong></div>
                <div class="frequency"><strong># of Classes</strong></div>
                <div class="price"><strong>Monthly Rate</strong></div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">Single Class</div>
                <div class="frequency"></div>
                <div class="price">$20.00/class</div>
            </div>
            
            <div class="clear"></div>
            <br />
            
            <h3>Elements</h3>
            <hr/>
            
            <div class="member-pricing gray">
            	<div class="membership"><strong>Membership Package</strong></div>
                <div class="frequency"><strong># of Classes</strong></div>
                <div class="price"><strong>Monthly Rate</strong></div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">2 Class Intro Course</div>
                <div class="frequency"></div>
                <div class="price">$125</div>
            </div>
            
            <div class="clear"></div>
            <br />
            
            <h3>Indoor Classes</h3>
            <hr/>
            
            <div class="member-pricing gray">
            	<div class="membership"><strong>Membership Package</strong></div>
                <div class="frequency"><strong># of Classes</strong></div>
                <div class="price"><strong>Monthly Rate</strong></div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">01-Month Membership</div>
                <div class="frequency">2/Week</div>
                <div class="price">$165/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">3/Week</div>
                <div class="price">$190/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">Unlimited</div>
                <div class="price">$215/mo</div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">03-Month Membership</div>
                <div class="frequency">2/Week</div>
                <div class="price">$145/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">3/Week</div>
                <div class="price">$170/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">Unlimited</div>
                <div class="price">$195/mo</div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">06-Month Membership</div>
                <div class="frequency">2/Week</div>
                <div class="price">$130/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">3/Week</div>
                <div class="price">$155/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">Unlimited</div>
                <div class="price">$180/mo</div>
            </div>
            
            <div class="clear"></div>
            <br />
            
            <h3>Indoor Strength Classes</h3>
            <hr/>
            
            <div class="member-pricing gray">
            	<div class="membership"><strong>Membership Package</strong></div>
                <div class="frequency"><strong># of Classes</strong></div>
                <div class="price"><strong>Monthly Rate</strong></div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">Members</div>
                <div class="frequency"></div>
                <div class="price">$5/class</div>
            </div>
            <div class="member-pricing">
            	<div class="membership">Non Members</div>
                <div class="frequency"></div>
                <div class="price">$10/class</div>
            </div>
            
            <div class="clear"></div>
            <br />
            
            <h3>Crossfight</h3>
            <hr/>
            
            <div class="member-pricing gray">
            	<div class="membership"><strong>Membership Package</strong></div>
                <div class="frequency"><strong># of Classes</strong></div>
                <div class="price"><strong>Monthly Rate</strong></div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">01-Month Membership</div>
                <div class="frequency">2/Week</div>
                <div class="price">$110/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">3/Week</div>
                <div class="price">$130/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">Unlimited</div>
                <div class="price">$155/mo</div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership">03-Month Membership</div>
                <div class="frequency">2/Week</div>
                <div class="price">$90/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">3/Week</div>
                <div class="price">$115/mo</div>
            </div>
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">Unlimited</div>
                <div class="price">$140/mo</div>
            </div>
            
            <div class="clear"></div>
            <br />
            
            <h3>Crossfit Kids</h3>
            <hr/>
            
            <div class="member-pricing gray">
            	<div class="membership"><strong>Membership Package</strong></div>
                <div class="frequency"><strong># of Classes</strong></div>
                <div class="price"><strong>Monthly Rate</strong></div>
            </div>
            
            <div class="clear"></div>            
            
            <div class="member-pricing">
            	<div class="membership">Kids (6-11 years old)</div>
                <div class="frequency">1/Week</div>
                <div class="price">$55/mo</div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">2/Week</div>
                <div class="price">$75/mo</div>
            </div>
            
            <div class="clear"></div>            
            <br />
                        
            <div class="member-pricing">
            	<div class="membership">Teens (12-19 years old)</div>
                <div class="frequency">1/Week</div>
                <div class="price">$75/mo</div>
            </div>
            
            <div class="member-pricing">
            	<div class="membership"></div>
                <div class="frequency">2/Week</div>
                <div class="price">$100/mo</div>
            </div>
            
            <div class="clear"></div>
            
            <br /><br />
            <div class="member-pricing">
            	<div class="fine-print">
                    *With the exception of Elements, all membership packages rates are per calendar month, paid monthly.
                    <br />
                    **15% discount to Teachers, Students, Police, Firefighters, and Military
                    <br />
                    ***20% off for kids if parents are in a 3 month membership or more
					<br />
                    ****10% off cyclefit classes for any current BPC member
                </div>
            </div>
            
            
            
            
        </div>
    	
        <div class="clear"></div>
    
    </div>   
    
</div>

<?php include("php/footer.php"); ?>

</body>
</html>