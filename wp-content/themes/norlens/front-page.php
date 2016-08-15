<?php 

get_header();
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.5&appId=911661125591162";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
$query = new WP_Query(array( 'post_type' => 'bildspel', 'post_per_page' => -1) );

?>


	<section class="banner">
		<div class="showcase">
		<?php 

		while ($query->have_posts()) : $query->the_post(); 
	

		?>
		<div class="item" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')">
					<div class="hiddenTitle"><?php the_title(); ?></div>
		<div class="hiddenContent"><?php the_content(); ?></div>

		</div>


		<?php endwhile;?>
	    <?php wp_reset_postdata(); ?>
		</div>
		<div class="container">
		<div class="row">
		<div class="col-md-7"></div>
		<div class="col-md-5">
		<div class="slide-text-wrap">
				<div class="slide-text">
					<h3>Biltransporter</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit nibh urna, sed laoreet lectus mattis sed. Etiam finibus quam ac mattis lacinia. Morbi vel elementum eros.</p>
					
					</div>
					<div class="controll"><a class="btn-left" id="prev-btn" href="#"><i class="fa fa-arrow-circle-o-left"><span class="link-text">Föregående</span></i></a><a  class="btn-right" id="next-btn" href="#"><span class="link-text">Nästa</span><i class="fa fa-arrow-circle-o-right"></i></a></div>
					</div>
					</div>
					</div>
					</div>
	</section>


<section class="welcome-content">
<div class="container">
	
	<div class="row">
		<div class="col-md-7">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
<div class="service_boxes">
<div class="row">
	<div class="col-md-6"><a href="<?php bloginfo('url')?>/biltransporter/bilar/"><div class="item" style="background-image: url('<?php bloginfo('template_url')?>/img/transport.jpg');"><h2>Biltransport</h2></div></a></div>
	<div class="col-md-6"><a href="<?php bloginfo('url')?>/biltransporter/skadeanmalan/"><div class="item" style="background-image: url('<?php bloginfo('template_url')?>/img/reperation.jpg');"><h2>Skadeanmälan</h2></div></a></div>
	
	<div class="col-md-6"><a href="<?php bloginfo('url')?>/kontakt"><div class="item" style="background-image: url('<?php bloginfo('template_url')?>/img/kontakt.jpg');"><h2>Kontakta Oss</h2></div></a></div>
	<div class="col-md-6"><a href="<?php bloginfo('url')?>/om-oss/miljo-och-sakerhet/"><div class="item" style="background-image: url('<?php bloginfo('template_url')?>/img/miljo.jpg');"><h2>Miljö och säkerhet</h2></div></a></div>
</div>
</div>
</div>
<div class="col-md-5">
	<div class="fb-wrap">
		<?php the_field('facebook');?>
	</div>
	
	</div>
	</div>
	</div>
	</section>
<!--
	<section class="section-blue">
		<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>
	</section>
-->
<?php get_footer(); ?>