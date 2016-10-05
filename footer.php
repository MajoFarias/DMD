
<section class="third container-fluid">
	<img src="assets/images/dmd-white.png" alt="">
	<img src="assets/images/solidworks-white.png" alt="">
	<p>Sigue nuestras redes sociales</p>
	<a href="https://www.facebook.com/dmdcommx?fref=ts&__mref=message_bubble" target="_blank" ><i class="glyph-icon flaticon-social-media"></i></a>
	<a href=""><i class="glyph-icon flaticon-social-media-1"></i></a>
</section>

<footer>
	<section>
		<article class="solidwork">
			<h3>SOLIDWORKS® 2017</h3>
			<ul>
				<li> <a <?php echo ($user) ? 'href="calendar.php"' : 'href="#registroModal" data-toggle="modal"'; ?>">Calendario de eventos</a></li>
				<li> <a <?php echo ($user) ? 'href="novedades.php"' : 'href="#registroModal" data-toggle="modal"'; ?>">Top 10 Novedades</a></li>
				<li> <a <?php echo ($user) ? 'href="portafolio.php"' : 'href="#registroModal" data-toggle="modal"'; ?>">Recorrido por el portafolio de soluciones</a></li>
			</ul>
			<ul>
				<li> <a <?php echo ($user) ? 'href="actualidad.php"' : 'href="#registroModal" data-toggle="modal"'; ?>">SOLIDWORKS® en la actualidad</a></li>
				<li> <a <?php echo ($user) ? 'href="descargas.php"' : 'href="#registroModal" data-toggle="modal"'; ?>">Descargas</a></li>
				<li> <a <?php echo ($user) ? 'href="casos-exito.php"' : 'href="#registroModal" data-toggle="modal"'; ?>">Casos de éxito</a></li>
			</ul>
		</article>
		<article class="contactanos">
			<h3>Contáctanos</h3>
			<div>
				<h4>Correo</h4>
				<p><a href="mailto:contactar@dmd.com.mx">contactar@dmd.com.mx</a></p>
			</div>
			<div>
				<h4>Soporte</h4>
				<p><a href="#">01 800 363 4357</a></p>
			</div>
			<div>
				<h4>Ventas</h4>
				<p><a href="#">01 800 890 9038</a></p>
			</div>
		</article>
		

	</section>
	<section>
		<p>Todos los derechos reservados |
			<a href="">Aviso de privacidad</a></p>
		</section>

	</footer>


	<!-- MODAL GENERIC -->
	<div id="genericModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content modal-small">
				<button type="button" class="close col-sm-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 id="genericModalMsg">ENVIANDO...</h4>
			</div>
		</div>
	</div>

	<!--Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery.poshytip.js"></script>
	<script type="text/javascript" src="assets/js/tool.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	
	<script>
	//Menu//

	$(document).ready(function(){

		<?php 
			if(!$is_home_page && !$user){
				echo "$('#registroModal').modal('show')";
			}
		 ?>

		$('#toggle').click(function() {
			$(this).toggleClass('active');
			$('#overlay').toggleClass('open');
		});

		$('.carousel').carousel({
			interval: 5000
		});

		$(document).on('click', '.contact-opener', function(event) {
			event.preventDefault();
			var parent = $(this).parent();
			if($(parent).hasClass('active')){
				$(parent).removeClass('active').addClass('inactive');
			}
			else if($(parent).hasClass('inactive')){
				$(parent).removeClass('inactive').addClass('active');
				$(parent).find('#message').focus();
			}
		});

		$('a.page-scroll').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: ($($anchor.attr('href')).offset().top - 50)
			}, 1250);
			event.preventDefault();
		});

		$(document).on('click', '#showRegistroModal', function(event) {
			event.preventDefault();
			$("#logInModal").modal('hide');
			$("#registroModal").modal('show');
		});

		$(document).on('click', '#showLoginModal', function(event) {
			event.preventDefault();
			$("#registroModal").modal('hide');
			$("#logInModal").modal('show');
		});

	});

	</script>

	<script>
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 150) {
			$(".clearMargin").addClass("addMargin");
		} else {
			$(".clearMargin").removeClass("addMargin");
		}
	});

	</script>

</body>
</html>