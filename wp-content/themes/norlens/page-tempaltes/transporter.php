<?php

/*Template name: Transporter*/

get_header();




			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					$thepost = $post->ID;

							} // end while

									wp_reset_postdata();
			} // end if


$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1));

$about_children = get_page_children( 10, $all_wp_pages );

?>
<div class="sub-navigation-menu">
<div class="container">
<ul class="sub-menu">
	<?php foreach ($about_children as $post) : ?>

	<?php setup_postdata($post); ?>

		<?php if ($thepost == $post->ID) { ?>
			<li class="current-page"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
		<?php }else{ ?>

		<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>

		<?php } ?>

		<?php endforeach;
		wp_reset_postdata();
	?>
</ul>
</div>
</div>

<section class="trucks-content">
	<div class="container">
	<div class="row">		<div class="col-md-12">
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
?></div>
	</div>

	<?php if ($post->ID == 39 || $post->ID == 10) { ?>


<div class="trucks-table">

<?php $query8 = new WP_Query(array( 'post_type' => 'transport', 'posts_per_page' => -1) );

//print_r($query8);
?>

<div class="row">
				<div class="col-md-4"><?php the_post_thumbnail('full'); ?></div>
				<div class="col-md-2"><h3>Modell</h3></div>
				<div class="col-md-2"><h3>Typ av bil</h3></div>
				<div class="col-md-2"><h3>Bilplatser</h3></div>
				<div class="col-md-2"><h3>Trafikerar</h3></div>
</div>

<?php

					  while ( $query8->have_posts() ) : $query8->the_post(); ?>



			<div class="truck-item">
				<div class="col-md-4"><?php the_post_thumbnail('full'); ?></div>
				<div class="col-md-2"><p><?php the_field('modell');?></p></div>
				<div class="col-md-2"><p><?php the_field('typ_av_bil');?></p></p></div>
				<div class="col-md-2"><p><?php the_field('bilplatser');?></p></div>
				<div class="col-md-2"><p><?php the_field('trafikerar');?></p></div>
			</div>




	    <?php endwhile;?>


		</div>
			<?php } ?>
	</div>
</section>




<?php get_footer();?>
