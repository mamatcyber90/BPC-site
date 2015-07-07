var day;
var time;
var signed_up = false;
var pt = "false";
var cyclefit = "false";

$(document).ready(function(){
	$('#now').mouseover(function(){$('#now_text').text('SIGN UP FOR CLASSES')});
	$('#now').mouseout(function(){$('#now_text').text('GET STARTED TODAY')});
	
	
	$('#mon').click(function(){
		day = "Monday";
		time = "";
		show_sign_up();		
	});	
	
	$('#tues').click(function(){
		day = "Tuesday";
		time = "";
		show_sign_up();		
	});	
	
	$('#wed').click(function(){
		day = "Wednesday";
		time = "";
		show_sign_up();		
	});	
	
	$('#thurs').click(function(){
		day = "Thursday";
		time = "";
		show_sign_up();		
	});	
	
	$('#now').click(function(){
		day = "";
		time = "";
		show_sign_up();		
	});	

    $('.now').click(function(){
		day = "";
		time = "";
		show_sign_up();		
	});
	
	$('#pt').click(function(){
		day = "";
		time = "";
		pt = "true";
		show_sign_up();		
	});
	
	$('#mon_am_1').click(function(){
		day = "Monday";
		time = "5:30 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#mon_am_2').click(function(){
		day = "Monday";
		time = "9:00 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#mon_pm').click(function(){
		day = "Monday";
		time = "6:15 PM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#tues_am_1').click(function(){
		day = "Tuesday";
		time = "5:30 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#tues_noon').click(function(){
		day = "Tuesday";
		time = "12:00 PM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#tues_pm').click(function(){
		day = "Tuesday";
		time = "6:15 PM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#wed_am_1').click(function(){
		day = "Wednesday";
		time = "5:30 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#wed_am_2').click(function(){
		day = "Wednesday";
		time = "9:00 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#wed_pm').click(function(){
		day = "Wednesday";
		time = "6:15 PM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#thurs_am_1').click(function(){
		day = "Thursday";
		time = "5:30 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#thurs_noon').click(function(){
		day = "Thursday";
		time = "12:00 PM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#thurs_pm').click(function(){
		day = "Thursday";
		time = "6:15 PM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#fri_am_1').click(function(){
		day = "Friday";
		time = "5:30 AM";
		cyclefit = "true";
		show_sign_up();		
	});
	
	$('#close').click(function(){
		day = "";
		time = "";
		hide_sign_up();		
	});	
	
	$('#sign_up_button').click(function(){
		if($('#name_label').css('color') == "rgb(255, 0, 0)"){
			$('#name_label').css('color', '#BCD52F');
		}
		
		if($('#email_label').css('color') == "rgb(255, 0, 0)"){
			$('#email_label').css('color', '#BCD52F');
		}
		
		if($('#phone_label').css('color') == "rgb(255, 0, 0)"){
			$('#phone_label').css('color', '#BCD52F');
		}
		
		send_email();		
	});	
});

function send_email(){
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	var email_regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var phone_regex = /^\d{10}$/;
	var phone_regex_2 = /^[0-9-+]+$/;
	
	var not_valid = false;
	
	if(name == null  || name == ""){
		$('#name_label').css('color', 'red');
		$('#name').val('');
		not_valid = true;
	}
	
	if(email == null  || email == "" || !email_regex.test(email)){
		$('#email_label').css('color', 'red');
		$('#email').val('');
		not_valid = true;	
	}
	
	if(phone == null  || phone == "" || (!phone_regex.test(phone) && !phone_regex_2.test(phone))){
		$('#phone_label').css('color', 'red');
		$('#phone').val('');
		not_valid = true;		
	}
	
	if(not_valid){
		return;
	}
	
	$('#sign_up_button').attr("disabled", "disabled");
	$('#sign_up_button').css("cursor", "wait");
	
	var postData = 'name=' + name + '&email=' + email + '&day=' + day + '&time=' + time + '&phone=' + phone + '&training=' + pt + '&cyclefit=' + cyclefit;
	$('#count_down').text('5');
	$.ajax({
		type: "POST",
		url: './php/email.php',
		data: postData//,
		//complete: function(){ show_success_message(); setTimeout(function(){change(5);}, 1000);}//setTimeout(function(){hide_message();}, 8000);}
	}); 
	show_success_message();
	
	pt = "false";	
	cyclefit = "false";
	 
	setTimeout(function(){change(5);}, 1000);
}

function change(val_in){
	var sec = (parseInt(val_in)) - 1;
	
	if(sec != 0){
		$('#count_down').text(sec);
		setTimeout(function(){change(sec);}, 1000);
	}
	else{
		hide_message();	
	}
}

function show_success_message(){
	$('#succ_message').css('display', 'block');
	$('form').css('display', 'none');
	$('#sign_up_button').removeAttr("disabled");
	$('#sign_up_button').css("cursor", "default");
}

function hide_message(){
	hide_sign_up();
	$('#succ_message').css('display', 'none');
	$('form').css('display', 'block');	
}

function show_sign_up(){
	if($('#input_container').css('display') == 'none'){
		$('#input_container').css('display', 'block');
		$('.content').css('display', 'none');	
	}	
}

function hide_sign_up(){
	if($('#input_container').css('display') == 'block'){
		$('#input_container').css('display', 'none');
		$('.content').css('display', 'block');	
	}
	
	if($('#name_label').css('color') == "rgb(255, 0, 0)"){
		$('#name_label').css('color', '#BCD52F');
	}
	
	if($('#email_label').css('color') == "rgb(255, 0, 0)"){
		$('#email_label').css('color', '#BCD52F');
	}
	
	if($('#phone_label').css('color') == "rgb(255, 0, 0)"){
		$('#phone_label').css('color', '#BCD52F');
	}		
	
	$('#name').val('');
	$('#email').val('');
	$('#phone').val('');
	pt = "false";	
	cyclefit = "false";
}