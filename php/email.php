<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$phone = $_POST['phone'];
	$is_pt = $_POST['training'];
	$is_cyclefit = $_POST['cyclefit'];
	$dayTime = "";
	
	if($day != "" && $time != ""){
		$dayTime = 'He/she would like to do it on '.$day.' at '.$time.' at BRODIE.';	
	}
	
	$message = "";
	$headers = "From:BrodieParkCF";
	$subject = "";
	
	if($is_pt == "true"){
		$subject = "PERSONAL TRAINING SESSION";	
		$message = $name.' would like to do personal training! A confirmation email should be sent to them at '.$email.' or contact at '.$phone;
	}
	else if($is_cyclefit == "true"){
		$subject = "CYCLEFIT SIGN UP";	
		$message = $name.' would like to sign up for CycleFit! '.$dayTime.' A confirmation email should be sent to them at '.$email.' or contact at '.$phone;
	}
	else{
		$subject = "NEW ELEMENTS SIGN UP";
		$message = $name.' would like to sign up! '.$dayTime.' A confirmation email should be sent to them at '.$email.' or contact at '.$phone;	
	}
	
	//send email. might need to change when mail server is changed	
	mail('sarasmithhart@yahoo.com, info@brodieparkcrossfit.com', $subject, $message, $headers);

?>