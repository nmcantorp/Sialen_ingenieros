<?php require_once('pages/header.php'); ?>
<style type="text/css">
	
		h3 {
			margin: 0;	
			padding: 7px 0 0 0;
			font-size: 16px;
			text-transform: uppercase;
		}

		div#feature_list {
			height: 100px;
		    overflow: hidden;
		    position: static;
		    width: 100%;
		}

		div#feature_list ul {
			position: absolute;
			top: 0;
			list-style: none;	
			padding: 0;
			margin: 0;
		}

		ul#tabs {
			left: 0;
			z-index: 2;
			width: 320px;
		}

		ul#tabs li {
			font-size: 12px;
			font-family: Arial;
		}
		
		ul#tabs li img {
			padding: 5px;
			border: none;
			float: left;
			margin: 10px 10px 0 0;
		}

		ul#tabs li a {
			color: #222;
			text-decoration: none;	
			display: block;
			padding: 10px;
			height: 60px;
			outline: none;
		}

		ul#tabs li a:hover {
			text-decoration: underline;
		}

		ul#tabs li a.current {
			background:  url('images/featurelist/feature-tab-current.png');
			color: #FFF;
		}

		ul#tabs li a.current:hover {
			text-decoration: none;
			cursor: default;
		}

		ul#output {
			height: 252px;
		    position: relative;
		    right: 0;
		    width: 100%;
		}

		ul#output li {
			position: absolute;
			width: 463px;
			height: 240px;
		}

		ul#output li a {
			position: absolute;
			bottom: 10px;
			right: 10px;
			padding: 8px 12px;
			text-decoration: none;
			font-size: 11px;
			color: #FFF;
			background: #000;
			-moz-border-radius: 5px;
		}
		
		ul#output li a:hover {
			background: #D33431;
		}
	</style>
	<script language="javascript">
	function cambio_img(id){

		var ruta = 'images/imagen_emprendedor1.png';
		if(id==3){
			ruta = 'images/featurelist/sample3.jpg'
		}else if(id==2){
			ruta = 'images/featurelist/sample2.jpg';
		}else if(id==1){
			ruta = 'images/imagen_emprendedor1.png';
		}

		$('#center').css('background', 'url('+ruta+') no-repeat ');
	}
		$(document).ready(function() {

			/*$.featureList(
				$("#content_center a"),
				$("#output li"), {
					start_item	:	0
				}
			);*/

			/*
			
			// Alternative

			
			$('#tabs li a').featureList({
				output			:	'#output li',
				start_item		:	1
			});

			*/

		});
	</script>
<div id="banner">
	<div style="overflow:hidden; width:960px; margin: 0px auto; padding:0 0px;"> 
		<div class="pix_diapo">

			<div data-thumb="images/slide3_0.jpg">
				<img src="images/slide3_0.jpg">
				<div class="caption elemHover fromLeft">
					This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
				</div>
			</div>

			<div data-thumb="images/imagen_emprendedor1.png">
				<img src="images/imagen_emprendedor1.png"> 
				<div class="caption elemHover fromLeft" style="padding-top:5px;">
					The first are loaded immediately before than the second one
				</div>
			</div>
		</div><!-- #pix_diapo -->
	</div>
</div>
<div id="center">
	<!-- <div id="feature_list" style=" z-index:1">  
	  <ul id="output"><br>
	    <li> <img src="images/imagen_emprendedor_grande.png" style="height: 650px; width:1000px;"> <!-- <a href="#">See project details</a> -- </li>
	    <li> <img src="images/featurelist/sample2.jpg" style="height: 650px; width:1000px;"> <!-- <a href="#">See project details</a> -- </li>
	    <li> <img src="images/featurelist/sample3.jpg" style="height: 650px; width:1000px;"> <!-- <a href="#">See project details</a> -- </li>
	  </ul>
	  <br>
	</div> -->
	<div id="content_center">
			<div id="link1" class="content_link" onmouseover="cambio_img(1);">Software a la Medida < </div>
			<div id="link2" class="content_link" onmouseover="cambio_img(2);">Innovación < </div>
			<div id="link3" class="content_link" onmouseover="cambio_img(3);">Crecimiento Continuo < </div>
	</div>
	<br>
	<div id="susc">
		<div id="susc_int">
			<div id="formulario_sus">
				<input type="email" id="input_email" >
				<input type="button" id="boton_sus" value="Aceptar">
			</div>
		</div>			
	</div>
</div>

<div id="noticias">proximamente noticias</div>


<?php require_once('pages/footer.php'); ?>
