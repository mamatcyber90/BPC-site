<?php 
$your_email ='fincher.katie@gmail.com';// <<=== update to your email address

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
        $subject="BPC Newsletter Add";
        $from = "BPC Newsletter Form";
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        
        $body = "Add to Newsletter Email list \n\n". 
        "Name: $name\n".
        "Email: $visitor_email \n";  
        
        $headers = "From: $from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        
        mail($to, $subject, $body, $headers);
        
        header('Location: added.php');
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
    <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css' />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>

    <link href="css/style20170124.css" rel="stylesheet" type="text/css" />
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
        
        <div class="col signup" id="singlecol" style="min-height: 415px;">
            <h1>Newsletter Sign Up</h1>
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

</body>
</html>