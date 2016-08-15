<footer>
<div class="footer-menu"><div class="container"></div></div>
	<div class="container">
	<div class="footer-content">
		Norléns Transport AB   |   Spikgatan 1   S-753 23   Uppsala   Sweden   |   Org.nr. 556239-0541   |   Tel: +46 18 100400   |   E-mail: info@norlens.se
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



		 			slider.on('changed.owl.carousel', function(event) {

		 				console.log(event.item.index);
		 				console.log(this);
   var title = $('.active .hiddenTitle').html();

        $(".slide-text h3").fadeOut(500, function() {

    $('.slide-text h3').html(title)

}).fadeIn(500);


           var content = $('.active .hiddenContent').html();

        $(".slide-text p").fadeOut(500, function() {

    $('.slide-text p').html(content)

}).fadeIn(500);

})
		 			/*

		 function callback(e) {
		 			 	var e = this;
		 	console.log(e);
		 	console.log(this.value);



		 	 //var item = e.item.index; 

    var title = $('.hiddenTitle').html();

    console.log();

        console.log(title);

    $('slide-text h3').innerHTML = title;
}

*/


		var owl = $('.showcase').data('owlCarousel');



		$('#prev-btn').click(function(){
			owl.prev()
			console.log('prev');
		});

		$('#next-btn').click(function(){
			owl.next()
		});


		function next(){
			owl.next()   // Go to next slide

		}

		function prev(){
			owl.prev()   // Go to previous slide
		}
	});

</script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/lightbox.js"></script>
<?php wp_footer(); ?>
</body>
</html>