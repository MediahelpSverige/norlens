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

        wp_reset_postdata();



			} // end if

?>

<div class="service_boxes">

<div class="row">

  <?php

    $tjanst1 = get_field('tjanstebox1');


    if($tjanst1){

      // override $post
	     $post = $tjanst1;

       setup_postdata( $post );


       ?>

    <div class="col-md-6"><a href="<?php the_permalink(); ?>"><div class="item" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"><h2><?php the_title(); ?></h2></div></a></div>

    <?php wp_reset_postdata(); ?>

  <?php  } ?>



  <?php


    $tjanst2 = get_field('tjanstebox2');

    if($tjanst2){

      // override $post
       $post = $tjanst2;

       setup_postdata( $post );



       ?>

    <div class="col-md-6"><a href="<?php the_permalink(); ?>"><div class="item" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"><h2><?php the_title(); ?></h2></div></a></div>

    <?php wp_reset_postdata(); ?>

  <?php  } ?>


  <?php

    $tjanst3 = get_field('tjanstebox3');

    if($tjanst3){

      // override $post
       $post = $tjanst3;

       setup_postdata( $post );

       ?>

    <div class="col-md-6"><a href="<?php the_permalink(); ?>"><div class="item" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"><h2><?php the_title(); ?></h2></div></a></div>

    <?php wp_reset_postdata(); ?>

  <?php  } ?>

  <?php

    $tjanst4 = get_field('tjanstebox4');

    if($tjanst4){

      // override $post
       $post = $tjanst4;

       setup_postdata( $post );

       ?>

    <div class="col-md-6"><a href="<?php the_permalink(); ?>"><div class="item" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"><h2><?php the_title(); ?></h2></div></a></div>

    <?php wp_reset_postdata(); ?>

  <?php  } ?>


</div>

</div>
</div>



<div class="col-md-5">

	<div class="fb-wrap">

		<div class="contact-sidebar">
			<h4>Kontaktuppgifter</h4>

			<ul>
				<li>
					<i class="fa fa-mobile-phone"></i> <a href="tel:<?php the_field('contact-tel'); ?>"><?php the_field('contact-tel'); ?></a>
				</li>
				<li>
					<i class="fa fa-envelope-o"></i> <a href="mailto:<?php the_field('contact-email'); ?>"><?php the_field('contact-email'); ?></a>
				</li>
			</ul>
		</div>

		<div class="contact-sidebar">
			<?php the_field('contact-oppet'); ?>
		</div>


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
