<html>

<head>

	<meta charset="UTF-8">

		<title><?php bloginfo ( 'name' ); ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.12.0.min.js"></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/parallax.min.js"></script>

<!--Custom stylesheet-->

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css">





<!-- Optional theme -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css">

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">

<link href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css" rel="stylesheet">



<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/lightbox.js"></script>





<!--OWL-->

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.css">

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.transitions.css">

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.theme.css">

<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/icon.jpg">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,700|Lora:400,700' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo|Crimson+Text:400,400italic,700' rel='stylesheet' type='text/css'>



<script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>

<script src="//use.edgefonts.net/passion-one:n4,n7,n9;neuton;source-sans-pro.js"></script>

<script type="text/javascript">

	





</script>

<?php wp_head(); ?>

</head>



<body <?php body_class( $class ); ?>>



	<header>

		<div class="top-head">

			<div class="container">

			<div class="center-field"><div class="searchbar"><?php get_search_form(); ?></div></div>

				<div class="hours">Mån - Fre 7:00 - 16:30<i class="fa fa-clock-o"></i></div>

                 <div class="tele">Tel: 018-100400<i class="fa fa-mobile"></i></div>

			</div>

		</div>

		<div class="bottom-head">

		<div class="container">

			<div class="logo">

				<img src="<?php bloginfo('template_url');?>/img/logga1.png">

			</div>

			<div class="menu-toggle"><i class="fa fa-bars"></i></div>

			<nav class="main-nav">

			<?php wp_nav_menu ( array( 'menu' => 'main_nav', 'menu_class' => 'site_nav',) ); ?>

			</nav>

			</div>

		</div>

	</header>



<?php if (is_front_page() == false) { 

	/*Lägg bildspel i banner på sidor som inte är förstasidan. kopplat till custom fields på varje sida*/ ?>

	<section class="single-page banner">

		<div class="showcase">

		<?php 



		while (have_posts()) : the_post(); 

	



		?>

		<?php 				

foreach( get_cfc_meta( 'bildspel' ) as $key => $value ){

    ?>



    <div class="item" style="background-image:url('<?php the_cfc_field( 'bildspel','bild', false, $key ); ?>')">



    </div>



<?php } ?>

		







		<?php endwhile;?>

	    <?php wp_reset_postdata(); ?>

		</div>

	</section>

<?php }?>