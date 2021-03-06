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

    <link href="css/style20170124.css" rel="stylesheet" type="text/css" />
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

    <div class="content">

        <div class="col" id="singlecol">
            <h1>Contact Us</h1>

            <div class="map">
                <iframe width="440" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=9001+brodie+lane+austin&amp;ie=UTF8&amp;hq=&amp;hnear=9001+Brodie+Ln,+Austin,+Texas+78749&amp;gl=us&amp;t=m&amp;ll=30.193286,-97.843723&amp;spn=0.022256,0.03768&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                <small><a href="https://maps.google.com/maps?q=9001+brodie+lane+austin&amp;ie=UTF8&amp;hq=&amp;hnear=9001+Brodie+Ln,+Austin,+Texas+78749&amp;gl=us&amp;t=h&amp;ll=30.193286,-97.843723&amp;spn=0.022256,0.03768&amp;z=14&amp;iwloc=A&amp;source=embed" target="_blank">View Larger Map</a></small>
            </div>

            <h3>Our Address</h3>

            <p>9001 Brodie Lane C-9
                <br />Austin, Texas 78748</p>

            <p><strong>Questions? Give us a call:</strong>
                <br />512.280.1308
                <br /><br /><strong>or email us:</strong>
                <br /><a href="mailto:info@brodieparkcrossfit.com">info@brodieparkcrossfit.com</a></p>

            <h3>Connect with BPC</h3>

            <p>
                Facebook <a href="https://www.facebook.com/BrodieParkCrossFit" target="_blank">@BrodieParkCrossFit</a>
                <br />Twitter <a href="https://twitter.com/#!/brodieparkxfit" target="_blank">@brodieparkxfit</a>
                <br />YouTube <a href="https://www.youtube.com/BrodieParkCrossFit" target="_blank">@BrodieParkCrossFit</a>
            </p>
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
