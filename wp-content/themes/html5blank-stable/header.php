<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					<!-- nav -->
					<div class="row">
						<div class="col-sm-3 logo text-center">
							<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo11.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<div class="col-sm-9 ">
							<nav class="navbar navbar-expand-lg navbar-light">					  
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    	<span class="navbar-toggler-icon"></span>
								    </button>

								<div class="collapse navbar-collapse" id="navbarSupportedContent">
								    <ul class="navbar-nav snip1135">
								      	<li class="nav-item active">
								        	<a class="nav-link" href="/wordpress-html5/index.php/home-page/">Home </a>
								      	</li>
								     	<li class="nav-item">
								        	<a class="nav-link" href="/wordpress-html5/index.php/about-us/">About Us</a>
								      	</li>
								     	
								     	 <li class="nav-item">
								        	<a class="nav-link" href="/wordpress-html5/index.php/timetable/">TimeTable</a>
								      	</li>
								      	<li class="nav-item">
								        	<a class="nav-link" href="/wordpress-html5/index.php/blog/">Blogs</a>
								      	</li>
								      	
								      	<li class="nav-item dropdown">
								        	<a class="nav-link" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								          Pages
								        	</a>
									        <div class="dropdown-menu drop" aria-labelledby="dropdownMenuButton">
									          	<a class="dropdown-item" href="/wordpress-html5/index.php/departments/">Departments</a>
									          	<a class="dropdown-item" href="/wordpress-html5/index.php/doctors/">Our Doctors</a>
									          	<a class="dropdown-item" href="/wordpress-html5/index.php/appointment/">Appointments</a>
									          	<a class="dropdown-item" href="/wordpress-html5/index.php/faq/">FAQ</a>

									        </div>
								     	 </li>
								      	<li class="nav-item">
								      	    <a class="nav-link" href="#">Shop</a>
								      	</li>
								       	<li class="nav-item">
								        	<a class="nav-link" href="/wordpress-html5/index.php/contacts/">Contact</a>
								      	</li>
								    </ul>
								</div>
							</nav>
						</div>
					</div>
					<hr>
					 <?php //html5blank_nav(); ?>
			</header>


		<!-- id =	jyotiguptaid99@gmail.com
		password = Jyotigupta#
		username = wordpress-html5 -->
<!-- 
$lastposts = get_posts( array(
    'posts_per_page' => 3
) );

if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); 
         the_content(); 
   
    endforeach; 
  wp_reset_postdata();
}	
 -->
<!--  Can you please give me access of this page? -->