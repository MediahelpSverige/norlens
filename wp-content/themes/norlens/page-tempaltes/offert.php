<?php

/*

Template name: offert

*/

get_header();

?>





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

					the_content();

					//

				} // end while

			} // end if

?>



<?php $query8 = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 7, 'post_per_page' => -1) );

//print_r($query8);

					  while ( $query8->have_posts() ) : $query8->the_post(); ?>



		<?php the_title('<h2>', '</h2>');  ?>



		<?php the_content();?>


		<input type="radio" class="radio-private"><label for="radio-private">Privat</label>
		<input type="radio" class="radio-company"><label for="radio-company">Företag</label>

		<div class="select-private">
			Privat - beställning, offert
		</div>

		<div class="select-company">
			Företag - beställning, offert
		</div>

		<div class="order-private">
			Beställning privat
		</div>

		<div class="offert-private">
			Offert privat
		</div>

		<div class="order-company">
			Beställning företag
		</div>

		<div class="offert-company">
			Offert företag
		</div>

	    <?php endwhile;?>



</div>
</div>
</section>



<?php 
get_footer();
?>