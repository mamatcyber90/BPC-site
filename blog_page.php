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

    
    <div class="content">
        
        <div class="blog_container">
        	<div>
        		<?php
                    if(trim($_GET["title"]) == "Events"){
                        echo '<h3 id=event class=blog_page_title>' .trim($_GET["title"]). '</h3>';
                    }
                    else {
                        echo '<h3 class=blog_page_title>' .trim($_GET["title"]). '</h3>';
                    }
        		 
        			require('../public_html/wordpress/wp-blog-header.php');
					query_posts('category_name=' .trim($_GET["cat_type"]). '&posts_per_page='.$_GET["num_posts"].'&order=DESC&orderby=date'); 
					
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