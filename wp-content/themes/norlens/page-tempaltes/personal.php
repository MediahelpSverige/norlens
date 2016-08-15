<?php
/*
Template name: personal
*/
get_header();



			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 

					$thepost = $post->ID;

							} // end while
			} // end if


$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

$about_children = get_page_children( 6, $all_wp_pages );


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
<section class="section-white single">

	<div class="container">
	<div class="container-wrap">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//print_r($post);
					//
					// Post Content here
					the_title('<h1>','</h1>');
					//
				} // end while
			} // end if
?>

<div class="referens-wrap">
<?php $query8 = new WP_Query(array( 'post_type' => 'arbetare', 'posts_per_page' => -1) );
					while ( $query8->have_posts() ) : $query8->the_post(); ?>
					<div class="col-md-4">
					  <div class="personal-item">
					  	<?php the_post_thumbnail('medium');?>

						<?php the_title('<h3>', '</h3>');  ?>

						<?php the_content();?>

						</div>
						</div>
	    <?php endwhile;?>

</div>
</div>
</div>
</section>

<?php 
get_footer();
?>