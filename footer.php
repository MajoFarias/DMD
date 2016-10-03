<section class="third container-fluid">
	<img src="assets/images/dmd-white.png" alt="">
	<img src="assets/images/solidworks-white.png" alt="">
	<p>Sigue nuestras redes sociales</p>
	<a href=""><i class="glyph-icon flaticon-social-media"></i></a>
	<a href=""><i class="glyph-icon flaticon-social-media-1"></i></a>
</section>

<footer>
	<section>
		<article class="solidwork">
			<h3>SOLIDWORKS® 2017</h3>
			<ul>
				<li> <a href="calendar.php">Calendario de eventos</a></li>
				<li> <a href="novedades.php">Top 10 Novedades</a></li>
				<li> <a href="portafolio.php">Recorrido por el portafolio de soluciones</a></li>
			</ul>
			<ul>
				<li> <a href="actualidad.php">SOLIDWORKS® en la actualidad</a></li>
				<li> <a href="descargas.php">Descargas</a></li>
				<li> <a href="casos-exito.php">Casos de éxito</a></li>
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



<!-- REGISTRO -->
<div id="registro" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content modal-small">
      <button type="button" class="close col-sm-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4> HAZ SIDO REGISTRADO</h4>
        
    </div>
  </div>
</div>



<!-- SOLICITAR -->
<div id="solicitar" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content modal-small">
      <button type="button" class="close col-sm-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4>SOLICITUD ENVIADA  </h4>
        
    </div>
  </div>
</div>




<!--Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	 <script type="text/javascript" src="assets/js/jquery.poshytip.js"></script>
	 <script type="text/javascript" src="assets/js/tool.js"></script>
	
	<script>
	//Menu//

	  $(document).ready(function(){

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
	  	}
	  });

	  $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250);
        event.preventDefault();
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