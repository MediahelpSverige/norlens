<?php 

/*Template name: Galleri*/

get_header();
?>
<section class="section-white single">
<div class="container-wrap">
	<div class="container">
	<?php the_title('<h1>','</h1>'); ?>
	<div class="col-md-2 galleri-sidebar">
		<h3>Galleriarkiv</h3>
		<?php $args = array(

			'post_parent' => 14,
			'posts_per_page' => -1,
			'post_type' => 'page'



			);

		
		$posts_array = get_posts( $args ); 


		foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>


		<ul>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		</ul>


		<?php endforeach; 
		wp_reset_postdata();?>



	</div>
	<div class="col-md-10">
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
	</div>
</section>

<script type="text/javascript">
	
$(document).ready(function(){


	$('.gallery-item a').attr('data-lightbox','galleri');



});


</script>


<?php get_footer(); ?>