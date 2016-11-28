<footer class="clear">

<!-- <div class="footer-menu"><div class="container"></div></div> -->

	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<?php the_field('footer-contact'); ?>
			</div>

			<div class="col-sm-offset-2 col-sm-5 col-xs-12">
				<?php the_field('contact-oppet'); ?>
			</div>			
		</div>
	</div>

</footer>

<script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>

<script type="text/javascript">



	$(document).ready(function(){



	var w = $(window).innerWidth();

	console.log(w);







	if( w > 768){



		$('.menu-item-has-children').hover(

       function(){

			$(this).children('.sub-menu').slideDown(200,stop()); 

			},

			function(){

			$(this).children('.sub-menu').slideUp(200,stop()); 

			}

			);

			function stop(){

			$('.sub-menu').stop(true, true);

			}



	//RESPONSIVE HERE

	}else{

		$('.navbar-toggle').click(function(){

			$('#menu-primary-menu').slideToggle();





		});

}



		$('.menu-toggle').click(function(){

			$('.site_nav').slideToggle();

		})



		$('.dropbtn').click(function(){

			$('.dropdown-content').slideToggle();

		})





	var slider = 	 $('.showcase');



	slider.owlCarousel({

			loop:true,

		    margin:10,

		    nav:true,

		    items:1,

		    autoplayTimeout: 6000,

		    autoplay:true,

		    onChanged: true,

		    callbacks: true,

		    dots:true,

		    navText:['hej,do'],

		    navContainer:'.navcontainer',

		    dotsContainer:'showcase-dot',

		    animateOut: 'fadeOut',



		});










	});



</script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/lightbox.js"></script>

<?php wp_footer(); ?>

</body>

</html>