<?php 
$title = "Calendario de eventos";
include('header.php');
?>

<section class="headerIn" style="background: url('assets/images/dmd-contacto.jpg') center;">
	<div class="contentSmall">
		<h2 class="white">SOLIDWORKS<sup>® </sup> 2017</h2>
	</div>
</section>


<!-- Page Content -->
<div class="containerIn container">

	<!-- Marketing Icons Section -->
	<div class="row">
		<div class="col-lg-12 paddingAllB">
			<h1 class="line">
				Calendario de eventos 
			</h1>
		</div>
		<div class="col-sm-12 headMainorMed">
			<div class="content">
				<iframe src="https://www.youtube.com/embed/HflLxXGPUAs" frameborder="0" allowfullscreen></iframe> 
				<div class="textHead">
					<strong>Vive la Experiencia DMD</strong>   en Cinépolis y descubre las novedades que 
					SOLIDWORKS tiene para ti. Conocerás a fondo las funcionalidades, 
					desempeño, experiencias y tips por parte de los expertos para aumentar 
					tu competitividad y detonar la innovación en tus diseños.
					<br>
					<br>
					<ul class="general">
						<li>
							<i class="flaticon-arrows red"></i>
							<p>Conoce las novedades SOLIDWORKS 2017.</p>
						</li>
						<li>
							<i class="flaticon-arrows red"></i>
							<p>Navega por la plataforma de Soluciones.</p>
						</li>
						<li>
							<i class="flaticon-arrows red"></i>
							<p>Aprende las tendencias de la Industria.</p>
						</li>
						<li>
							<i class="flaticon-arrows red"></i>
							<p>Convive con los Expertos.</p>
						</li>
						<li>
							<i class="flaticon-arrows red"></i>
							<p>Diviértete.</p>
						</li>
					</ul>
				</div>
			</div>  
		</div>
		<hr>

	</div>

	<div class="row" id="calendar">
		<div class="month">
			<ul>
				
				<li>
					Octubre
				</li>
			</ul>
		</div>

		<ul class="weekdays">
			<li>S</li>
			<li>D</li>
			<li>L</li>
			<li>M</li>
			<li>M</li>
			<li>J</li>
			<li>V</li>
		</ul>
		
		<ul class="days">

			<li>
				<br> 1
			</li>
			<li>
				<br> 2
			</li>
			<li> <br>3</li>
			<li> <br>4</li>
			<li> <br>5</li>
			<?php if(!$user): ?>
			<li class="active"  id="demo-tip-yellow2" title="Querétaro<br> <a href='' data-toggle='modal' data-target='#registroModal'>PEDIR INFORMES</a>">
			<?php else: ?>
			<li class="active" id="demo-tip-yellow2" title="Querétaro<br> <a class='im_interested' href='javascript:void(0)' data-name='Evento 6 de Octubre - Querétaro'>PEDIR INFORMES</a>">
			<?php endif; ?>
				6
				<div class="date">
					<span>Querétaro</span>
					<button class="btn-redsmall <?php echo (!$user) ? '' : 'im_interested'; ?>" <?php echo (!$user) ? 'data-toggle="modal" data-target="#registroModal"' : '' ?> data-name="Evento 6 de Octubre - Querétaro">PEDIR INFORMES</button>
				</div>
			</li>
			<li><br>7</li>
			<li><br>8</li>
			<li><br>9</li>
			<li><br>2</li>
			<?php if(!$user): ?>
			<li class="active"  id="demo-tip-yellow2" title="Guadalajara<br> <a href='' data-toggle='modal' data-target='#registroModal'>PEDIR INFORMES</a>">
			<?php else: ?>
			<li class="active" id="demo-tip-yellow2" title="Guadalajara<br> <a class='im_interested' href='javascript:void(0)' data-name='Evento 11 de Octubre - Guadalajara'>PEDIR INFORMES</a>">
			<?php endif; ?>
				11
				<div class="date">
					<span>Guadalajara</span>
					<button class="btn-redsmall <?php echo (!$user) ? '' : 'im_interested'; ?>" <?php echo (!$user) ? 'data-toggle="modal" data-target="#registroModal"' : '' ?> data-name='Evento 11 de Octubre - Guadalajara'>PEDIR INFORMES</button>
				</div>
			</li>
			<li><br>12</li>
			<li><br>13</li>
			<li><br>14</li>
			<li><br>15</li>
			<li><br>16</li>
			<li><br>17</li>
			<?php if(!$user): ?>
			<li class="active"  id="demo-tip-yellow2" title="CDMX (Cuatitlán)<br> <a href='' data-toggle='modal' data-target='#registroModal'>PEDIR INFORMES</a>">
			<?php else: ?>
			<li class="active" id="demo-tip-yellow2" title="CDMX (Cuatitlán)<br> <a class='im_interested' href='javascript:void(0)' data-name='Evento 18 de Octubre - CDMX Cuatitlán'>PEDIR INFORMES</a>">
			<?php endif; ?>
				18
				<div class="date">
					<span>CDMX (Cuatitlán)</span>
					<button class="btn-redsmall <?php echo (!$user) ? '' : 'im_interested'; ?>" <?php echo (!$user) ? 'data-toggle="modal" data-target="#registroModal"' : '' ?> data-name="Evento 18 de Octubre - CDMX Cuatitlán">PEDIR INFORMES</button>
				</div>
			</li>
			<li>19</li>
			<?php if(!$user): ?>
			<li class="active"  id="demo-tip-yellow2" title="Monterrey<br> <a href='' data-toggle='modal' data-target='#registroModal'>PEDIR INFORMES</a>">
			<?php else: ?>
			<li class="active" id="demo-tip-yellow2" title="Monterrey<br> <a class='im_interested' href='javascript:void(0)' data-name='Evento 20 de Octubre - Monterrey'>PEDIR INFORMES</a>">
			<?php endif; ?>
				20
				<div class="date">
					<span>Monterrey</span>
					<button class="btn-redsmall <?php echo (!$user) ? '' : 'im_interested'; ?>" <?php echo (!$user) ? 'data-toggle="modal" data-target="#registroModal"' : '' ?> data-name="Evento 20 de Octubre - Monterrey">PEDIR INFORMES</button>
				</div>
			</li>
			<li><br>21</li>
			<li><br>22</li>
			<li><br>23</li>
			<li><br>24</li>
			<?php if(!$user): ?>
			<li class="active"  id="demo-tip-yellow2" title="CDMX (Aeropuerto)<br> <a href='' data-toggle='modal' data-target='#registroModal'>PEDIR INFORMES</a>">
			<?php else: ?>
			<li class="active" id="demo-tip-yellow2" title="CDMX (Aeropuerto)<br> <a class='im_interested' href='javascript:void(0)' data-name='Evento 25 de Octubre - CDMX Aeropuerto'>PEDIR INFORMES</a>">
			<?php endif; ?>
				25
				<div class="date">
					<span>CDMX (Aeropuerto)</span>
					<button class="btn-redsmall <?php echo (!$user) ? '' : 'im_interested'; ?>" <?php echo (!$user) ? 'data-toggle="modal" data-target="#registroModal"' : '' ?> data-name="Evento 25 de Octubre - CDMX Aeropuerto">PEDIR INFORMES</button>
				</div>
			</li>
			<li><br>26</li>
			<li><br>27</li>
			<li><br>28</li>
			<li><br>29</li>
			<li><br>30</li>
			<li><br>31</li>
		</ul>
	</div>
</div>

<?php include('footer.php'); ?>
