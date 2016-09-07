<?php
include('php/CustomCalendar.php');

if (preg_match("!^[0-9]+-[0-9]+-[0-9]+$!", @$_GET['date'])) {

    $date = $_GET['date'];

} else {
    $date = date('Y-m-d');

}
$calendar = new CustomCalendar('', $date);
$calendar -> add(date("2013-06-07"), "BPC Disco @ 6:00pm", "", "text2", "BPC disco at Brodie Park Crossfit. 2 benchmark workouts", "", "", "", "_self");
$calendar -> add(date("2013-06-14"), "Womens Clothing Swap @ 6:30pm", "", "text2", "Womens only clothing swap. BYOB. Email info@brodieparkcrossfit.com for more details", "", "", "", "_self");
$calendar -> add(date("2013-06-22"), "BPC Happy Hour @ Dogwood 4:00pm", "", "text2", "happy hour at Dogwood on 6th at 4:00pm", "", "", "", "_self");
$calendar -> add(date("2013-06-30"), "BPC WOD/Lunch @ Aussies 2:00pm", "", "text2", "WOD/Lunch at Aussies at 2:00pm", "", "", "", "_self");
$calendar -> add(date("2013-07-13"), "BPC Challenge - PANIC", "", "text2", "individual challebge. 3 WODs. 3 Levels (RX/Intern/Masters). $70 per person", "", "", "", "_self");
$calendar -> add(date("2013-06-09"), "Yoga @ BPC 9:30 am \n $10", "", "text2", "Yoga specifically for crossfitters. Every Sunday at 9:30. Must sign up!", "", "", "", "_self");
$calendar -> add(date("2013-06-16"), "Yoga @ BPC 9:30 am \n $10", "", "text2", "Yoga specifically for crossfitters. Every Sunday at 9:30. Must sign up!", "", "", "", "_self");
$calendar -> add(date("2013-06-23"), "Yoga @ BPC 9:30 am \n $10", "", "text2", "Yoga specifically for crossfitters. Every Sunday at 9:30. Must sign up!", "", "", "", "_self");
$calendar -> add(date("2013-06-30"), "Yoga @ BPC 9:30 am \n $10", "", "text2", "Yoga specifically for crossfitters. Every Sunday at 9:30. Must sign up!", "", "", "", "_self");
$calendar -> add(date("2013-06-08"), "Free Community WOD @ BPC 9:00am", "", "text2", "Free Community WOD @ BPC 9:00am", "", "", "", "_self");
$calendar -> add(date("2013-06-15"), "Free Community WOD @ BPC 9:00am", "", "text2", "Free Community WOD @ BPC 9:00am", "", "", "", "_self");
$calendar -> add(date("2013-06-22"), "Free Community WOD @ BPC 9:00am", "", "text2", "Free Community WOD @ BPC 9:00am", "", "", "", "_self");
$calendar -> add(date("2013-06-29"), "Free Community WOD @ BPC 9:00am", "", "text2", "Free Community WOD @ BPC 9:00am", "", "", "", "_self");
$calendar -> start();
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

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/calendar.css" type="text/css">
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
    
    <div class="content">
        <div class="module" id="singlecol">
            <h1>Events Calendar</h1>
            
             <!-- calendar start here --->
            <div class="flstMenu">
                <a href="?date=<?php echo $calendar -> lunaPrecedenta -> format('Y-m-d'); ?>"><?php echo $calendar -> lunaPrecedenta -> format('F'); ?>
                    </a>
            <span><?php echo $calendar -> lunaCurenta -> format('F Y'); ?></span>
            <a href="?date=<?php echo $calendar -> lunaUrmatoare -> format('Y-m-d'); ?>"><?php echo $calendar -> lunaUrmatoare -> format('F'); ?>
            </a>
            
            </div>
            
            <ul class="calendar">
            <li class="firstRow head">Monday</li>
            <li class="head">Tuesday</li>
            <li class="head">Wednesday</li>
            <li class="head">Thursday</li>
            <li class="head">Friday</li>
            <li class="head">Saturday</li>
            <li class="head">Sunday</li>
            <?php while(!$calendar->eLaFinal){
            $frow= '';
            if($calendar->cursor->format('N')==1){
            
            $frow = ' firstRow';
            }
            ?>
            
            <li class="<?php echo $frow;
                if ($calendar -> eAzi) { echo 'selectat';
                }
            ?>"><p class="date"><?php echo $calendar -> cursor -> format('d'); ?></p>
            
            <div class="iCode"><?php echo $calendar -> getCode(); ?></div>
            
            </li>
            
            <?php $calendar -> getNextDay(); ?>
            
            <?php } ?>
            </ul>
             <!-- calendar end here --->
            
            
            <div class="clear"></div>
        </div>
    </div>   
    
</div>

<?php 
    include("php/footer.php"); 
?>

</body>
</html>