<?php
/*
Template name: nyheter
*/
get_header();


wp_reset_query();

?>


<section class="section-white single">

<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); ?>


	<div class="container">
	<div class="container-wrap">
<div class="referens-wrap">
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<h1>Nyheter</h1>


<?php 
$wp_query = new WP_Query(array( 'post_type' => 'nyheter', 'posts_per_page' => 5, 'paged' => $paged) ); ?>


	<!-- pagination here -->
	<div class=" row pagination">
	<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>
</div>

<?php if ( $wp_query->have_posts() ) : 


print_r(get_query_var('page'));
print_r($query8->query_vars);

?>


<?php
					  while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					  <div class="ref-item">

		<?php the_post_thumbnail('medium');?>

		<?php the_title('<h2>', '</h2>');  ?>

		<?php the_content();?>

		<div class="the_date"><?php the_date(); ?></div>

		</div>
	    <?php endwhile;?>
	    	<?php wp_reset_postdata(); ?>

	    	<!-- pagination here -->
	<div class=" row pagination">
	<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>

	</div>

	<?php endif; ?>

</div>
</div>
</div>
</section>

<?php 
get_footer();
?>