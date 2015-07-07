<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Brodie Park Crossfit" />
    <meta name="keywords" content="Brodie Park, Brodie Park Crossfit, CrossFit Kids austin, austin, ATX, texas, TX, Crossfit Austin, Crossfit TX, South Austin Crossfit, Crossfit, Crossfit Kids, crossfight" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Brodie Park Crossfit | Austin, TX</title>
    <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css' />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
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
        
        <div class="col" id="leftcol">
            
            <div class="module" id="classes">
                <h2>Training &amp; Classes</h2>
                <ul>
                    <li><a href="blog_page.php?cat_type=WOD&title=CrossFit WOD&num_posts=7">Crossfit WOD</a></li>
                    <li><a class="south_lamar" href="/training_tracker">Training Tracker</a></li>
                    <li><a href="blog_page.php?cat_type=CrossFitKids&title=CrossFit Kids&num_posts=7">CrossFit Kids</a></li>
                    <li><a href="blog_page.php?cat_type=Success&title=Success Stories&num_posts=75">Success Stories</a></li>
                </ul>
            </div>
            
            <div class="module" id="trainers">
                <h2>Meet Our Trainers</h2>
                <ul>
                    <li><a href="trainers.php#women-sara">Sara</a></li>
                    <li><a href="trainers.php#women-shelley">SHELLEY</a></li>
                    <li><a href="trainers.php#men-jc">JC</a></li>
                </ul>
            </div>
            
            <div class="module" id="sponser">
                <ul>
                    <li><a href="http://www.crossfit.com" target="_blank"><img src="images/crossfit-logo.jpg" alt="crossfit-main"></a></li>
                    <li><a href="http://journal.crossfit.com" target="_blank"><img src="images/journal.jpg" alt="crossfit-jour"></a></li>
                    <li><a href="http://www.crossfitkids.com" target="_blank"><img src="images/kids.jpg" alt="crossfit-kids"></a></li>
                    <li><a href="https://www.advocare.com/120311523" target="_blank"><img src="images/advocare.jpg" alt="advocare"></a></li>
                </ul>       
            </div>
            
        </div>
        
        <div id="start_now">
            <a href="start_now.php">START NOW</a>
        </div>
        <div id="start_now">
            <a href="newsletter_add.php" style="font-size: 28px;">SIGN UP FOR NEWSLETTER</a>
        </div>
        <div class="col" id="rightcol">
            <div class="module" id="bpc-daily">
                <h2>BPC Times</h2>
                <?php
                    require('../html/wordpress/wp-blog-header.php');
                    query_posts('category_name=News&posts_per_page=10&order=DESC&orderby=date'); 
                    
                    while (have_posts()) : the_post();
                    echo "<div class=\"blog\"><em>";
                    the_date(); 
                    echo "</em><br />";
                    
                    the_title('<h4>', '</h4>');
                     
                    
                    $args = array(
                        'post_type' => 'attachment',
                        'numberposts' => null,
                        'post_status' => null,
                        'post_parent' => get_the_ID()
                    ); 
                    
                    $attachments = get_posts($args);
                    if ($attachments) {
                        foreach ($attachments as $attachment) {
                            
                            the_attachment_link($attachment->ID, false);
                            
                        }
                    }
                    
                    the_content();                  
                    echo "</div>"; 

                    endwhile; 
                ?>
            </div>
        </div>
        
        <div class="clear"></div>
    
    </div>   
    
</div>

<?php 
    include("php/footer.php"); 
?>

</body>
</html>