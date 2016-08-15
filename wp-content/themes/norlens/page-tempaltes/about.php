<?php
/*
Template name: om oss
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
<div class="container-wrap">
	<div class="container">
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
</div>
</div>
</section>

<?php 
get_footer();
?>