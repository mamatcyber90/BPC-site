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
                <ul>
                    <li><a href="blog_page.php?cat_type=WOD&title=CrossFit WOD&num_posts=7">Crossfit WOD</a></li>
                    <li><a class="south_lamar" href="/training_tracker">Training Tracker</a></li>
                    <li><a href="blog_page.php?cat_type=Success&title=Success Stories&num_posts=75">Success Stories</a></li>
                </ul>
            </div>

            <div id="start_now_green">
                <a href="start_now.php">START NOW</a>
            </div>

            <div class="module" id="trainers">
                <h2>Meet Our Coaches</h2>
                <ul>
                    <li><a href="coaches.php">Sara</a></li>
                    <li><a href="coaches.php">SHELLEY</a></li>
                    <li><a href="coaches.php">JC</a></li>
                </ul>
            </div>

            <div class="module" id="sponser">
                <ul>
                    <li><a href="http://journal.crossfit.com/start.tpl?version=CFJ-white300x150" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img style="margin: 2px 19px 0;" src="http://journal.crossfit.com/templates/images/white-300x150.png" width="150px" height="66px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" /></a></li>
                    <li><a href="https://www.advocare.com/120311523" target="_blank"><img style="height: 70px; margin-left: 30px;" src="images/white-advocare-logo.png" alt="advocare"></a></li>
                    <li><a href="https://kids.crossfit.com " target="_blank"><img style="margin-left: 15px;" src="images/CFK_logo_v_tag_color_darkbg.png" alt="crossfit-kids"></a></li>
                </ul>
            </div>

        </div>

        <div class="col" id="rightcol">
            <div class="module" id="bpc-daily">
                <h2>News & Events</h2>
                <?php
                require('../html/wordpress/wp-blog-header.php');
                query_posts('category_name=News&posts_per_page=7&order=DESC&orderby=date');

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