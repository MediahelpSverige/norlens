<?php 

get_header();
?>
<section class="section-white single">
<div class="container-wrap">
	<div class="container">
		<?php 
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 3, 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
		<!-- rest of the loop -->
		<!-- the title, the content etc.. -->
<?php endwhile; ?>
<!-- pagination -->
<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
	</div>
	</div>
</section>
<?php get_footer(); ?>