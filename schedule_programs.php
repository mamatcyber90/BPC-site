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

    <link href="css/style20170124.css" rel="stylesheet" type="text/css" />
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

    <div id="sched" class="content">
        <div class="col" id="singlecol">
            <h1>Training Schedule</h1>

            <iframe src="https://brodieparkcrossfit.zenplanner.com/zenplanner/portal/calendar.cfm?type=Calendar&FRAME=true" style="width:100%;height:500px;font-family:'Economica',Arial,Helvetica,sans-serif;" onLoad="window.scroll(0,0);" frameborder="0" id="idZenPlannerFrame">
                <noframes>
                    <a href="https://brodieparkcrossfit.zenplanner.com/zenplanner/portal/calendar.cfm">Online Calendar</a>
                </noframes>
            </iframe>
            <script src="https://brodieparkcrossfit.zenplanner.com/zenplanner/skin/js/resize.js"></script>
        </div>

        <div class="clear"></div>

    </div>

</div>


<?php include("php/footer.php"); ?>

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