<?php 
/*
Template name: offert
*/

get_header();

?>

<section class="section-white single">

<div class="container-wrap">

	<div class="container">

		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>

					<h1>
						<?php the_title(); ?>
					</h1>	

					<h4>
						STEG 1: Välj privatperson eller företag
					</h4>

					<div class="choose-form">
						<input type="radio" name="choose-form" class="radio-button radio-private"><label for="radio-private">Privat</label>
						<input type="radio" name="choose-form" class="radio-button radio-company"><label for="radio-company">Företag</label>						
					</div>

					<div class="select-private">
						<h4>
							STEG 2: Ange typ av förfrågan
						</h4>

						<select name="select-private" class="select-private">
							<option value="Förfrågan" selected>Ange typ av förfrågan:</option>
							<option value="Beställning">Beställning</option>
							<option value="Offertförfrågan">Offertförfrågan</option>
						</select>
					</div>

					<div class="select-company">
						<h4>
							STEG 2: Ange typ av förfrågan
						</h4>

						<select name="select-company" class="select-company">
							<option value="Förfrågan" selected>Ange typ av förfrågan:</option>
							<option value="Beställning">Beställning</option>
							<option value="Offertförfrågan">Offertförfrågan</option>
						</select>
					</div>

					<div class="order-private">
						<?php echo do_shortcode('[contact-form-7 id="251" title="Beställning privat"]'); ?>
					</div>

					<div class="offert-private">						
						<?php echo do_shortcode('[contact-form-7 id="255" title="Offert privat"]'); ?>
					</div>

					<div class="order-company">
						<?php echo do_shortcode('[contact-form-7 id="254" title="Beställning företag"]'); ?>				
					</div>

					<div class="offert-company">
						<?php echo do_shortcode('[contact-form-7 id="256" title="Offert företag"]'); ?>				
					</div>					

					<?php
				} // endwhile
			} // endif ?>
		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?php the_field('villkor-rubrik'); ?></h4>
			</div>
			<div class="modal-body">
				<?php the_field('villkor-text'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Stäng</button>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>