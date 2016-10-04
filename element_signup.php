<?php 
$your_email ='info@brodieparkcrossfit.com';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';
$elem_testout = '';
$phone = '';
$location = '';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	$elem_testout = $_POST['elem_testout'];
	$phone = $_POST['phone'];
	$location = $_POST['location'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New ELEMENTS submission";
		$from = "ElementSignUpForm";
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "$name submitted the elements form:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".
		"Phone: $phone \n".
		"Elements or Test Out: $elem_testout \n".
		"Location: $location \n".
		"Message: \n ".
		"$user_message\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body, $headers);
		
		header('Location: thank_you.php');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Brodie Park Crossfit" />
	<meta name="keywords" content="Brodie Park, Brodie Park Crossfit, Crossfit Austin, Crossfit TX, South Austin Crossfit, Crossfit, Crossfit Kids, crossfight" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Brodie Park Crossfit | Austin, TX</title>
	<link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css' />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
	<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>

	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/x-icon" href="http://www.brodieparkcrossfit.com/favicon.ico">
	<style>
		.signup label, .signup a, .signup body 
		{
			font-family : Arial, Helvetica, sans-serif;
			font-size : 12px; 
		}
		
		.signup .err
		{
			font-family : Verdana, Helvetica, sans-serif;
			font-size : 12px;
			color: red;
		}
	</style>
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

    
    <div class="content">
        
        <div class="col signup" id="singlecol">
       		<h1>Elements and Elements Test Out Sign Up</h1>
       		<?php
				if(!empty($errors)){
				echo "<p class='err'>".nl2br($errors)."</p>";
				}
				?>
				<div id='contact_form_errorloc' class='err'></div>
				<form method="POST" name="contact_form" 
				action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
				<p>
				<label for='name'>Name: </label><br>
				<input type="text" name="name" value='<?php echo htmlentities($name) ?>'>
				</p>
				<p>
				<label for='email'>Email: </label><br>
				<input type="text" name="email" value='<?php echo htmlentities($visitor_email) ?>'>
				</p>
				<p>
				<label for='phone'>Phone: </label><br>
				<input type="text" name="phone" value='<?php echo htmlentities($phone) ?>'>
				</p>
				<p>
				<label for='testout'>Elements or Test Out:</label><br>	
				<input type="radio" name="elem_testout" value='Elements' checked="checked">Elements<br>
				<input type="radio" name="elem_testout" value='Test Out'>Test Out
				</p>
				<p>
				<label for='testout'>Location:</label><br>	
				<input type="radio" name="location" value='Brodie' checked="checked">Brodie<br>
				</p>
				<p>
				<label for='message'>Message:</label> <br>
				<textarea name="message" rows=8 cols=30><?php echo htmlentities($user_message) ?></textarea>
				</p>
				<p>
				<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
				<label for='message'>Enter the code above here :</label><br>
				<input id="6_letters_code" name="6_letters_code" type="text"><br>
				<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
				</p>
				<input type="submit" value="Submit" name='submit'>
				</form>
				<script language="JavaScript">
				// Code for validating the form
				// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
				// for details
				var frmvalidator  = new Validator("contact_form");
				
				//remove the following two lines if you like error message box popups
				frmvalidator.EnableOnPageErrorDisplaySingleBox();
				frmvalidator.EnableMsgsTogether();
				
				frmvalidator.addValidation("name","req","Please provide your name"); 
				
				frmvalidator.addValidation("email","req","Please provide your email"); 
				frmvalidator.addValidation("email","email","Please enter a valid email address"); 
				
				frmvalidator.addValidation("phone","req","Please provide your phone number");
				frmvalidator.addValidation("phone","maxlen=50", "Please enter valid phone number");
 				frmvalidator.addValidation("phone","numeric", "Please enter valid phone number. Please do not enter dashes.");
				</script>
				<script language='JavaScript' type='text/javascript'>
				function refreshCaptcha()
				{
					var img = document.images['captchaimg'];
					img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
				}
				</script>
            
        </div>
    	
        <div class="clear"></div>
    
    </div>   
    
</div>

<?php 
	include("php/footer.php"); 
?>

<!-- Google analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-84269184-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>