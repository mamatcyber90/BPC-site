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
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/blocker.css" rel="stylesheet" type="text/css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js" type="text/javascript"></script>
	<script src="js/element_sign_up.js" type="text/javascript"></script>
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

            <h1>CycleFit</h1>
            
            <div></div>
            <table>
            	<tr>
            		<td>
            			<img style="width:300px;height:400px;" src="images/cyclefit.PNG"/>
            		</td>
            		<td>
			            <h3><b>WHAT IS CYCLEFIT?</b></h3>
						
			            <p>CycleFit is a fitness program that combines strength training and power-based cycling to help you reach what we call Totalis Corpus.  Latin for “Total Body,” Totalis Corpus is a different kind of fitness, built from the inside out.  Our high intensity, high endurance programming will challenge you both cardiovascularly and physically.</p>
            			
            			<br />
						<h3 style="text-align: center;">
							<a href="https://ccusa.frontdeskhq.com/locations/cyclefit" target="_blank">FIND A CLASS NOW</a>
						</h3>
						<br />
						<br />
						
            			<h3><b>THE CYCLEFIT FORMULA</b></h3>
            			<p><b style="color:#bcd52f;">Totalis Corpus:</b> CycleFit programming is designed to work the body from the inside out.</p>
            			<p><b style="color:#bcd52f;">Programming Detail:</b> CycleFit training sessions are rigorously designed and programmed. Nothing we do is random.</p>
            			<p><b style="color:#bcd52f;">Bias toward Endurance:</b> CycleFit programming has a bias towards relative endurance, a perfect compliment to the work capacity emphasis of CrossFit programming</p>
            			<p><b style="color:#bcd52f;">Volume and Training Session Length:</b> CycleFit programming is designed to have you finished with your workout and out the door within an hour.</p>
            			<p><b style="color:#bcd52f;">Training Schedule:</b> The CycleFit training schedule is programmed for you to be able to train up to five days a week.</p>
            			<p><b style="color:#bcd52f;">Not every CycleFit session is a race:</b> Workouts are designed for you to challenge yourself, not your teammates. Benchmark workouts and CycleFix times are recorded so that when you repeat those workouts you have a new goal to shoot for.</p>            			
            			<p><b style="color:#bcd52f;">Professional Coaches:</b> Our classes are lead by professional coaches that have backgrounds in working with endurance athletes of all ability levels. Our coaches create a community atmosphere where encouragement and support go hand in hand with the workouts.</p>
            			          		
            		</td>
            	</tr>
            </table>
            <br />
            <div class="member-pricing">
				<div class="fine-print">
                *Classes available in our South Lamar gym only.
            	</div> 
            </div>                
        </div>
        <div class="clear"></div>     	   
    </div>       
</div>

<?php include("php/footer.php"); ?>

</body>
</html>
