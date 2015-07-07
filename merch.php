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

	<?php 
		include("php/header.php"); 
	?>
	
    <?php 
    	include("php/navigation.php"); 
    ?>

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
    	<div class="merch_container">
    		<h3 id=event class=blog_page_title>Goods</h3>
        	<h4>All merchandise available at gym!</h4>
        	<table id="photos_in_folder" style="margin: 5px auto;">
				<?php
					$path = 'images/goods';
					$i = 0;	
					$id = 0;							
	
					if (is_dir($path)) {
						if ($dh = opendir($path)) {
								
							while (($file = readdir($dh)) !== false) {
								if($file !== '.' && $file !== '..'){
							    	if($i == 0){
										echo '<tr>';	
									}
									
									$i++;
								    $id++;
								    $pic = basename($file);
									
									echo '<td style="border: 2px solid #ffffff; padding: 5px; -webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px;"><img style="height: 225px; width: 200px; -webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px;" id="img'.$id.'" src="./'.$path.'/'.$pic.'" alt="pic"/></td>';
									
									if(($id % 4) == 0){
										echo '</tr>';
										$i == 0;	
									}
								}
						    } 
							
						    closedir($dh);
						    if($i != 4 && $i != 0){
								echo '</tr>';
							}
					    }
					}
				?>
			</table>
        
    	
        	<div class="clear"></div>
    	</div>
    </div>   
    
</div>

<?php 
	include("php/footer.php"); 
?>

</body>
</html>
