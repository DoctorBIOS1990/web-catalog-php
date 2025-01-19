<?php
	include_once __DIR__ . "/conexion.php";
	$contador = 0;
	$consultaAnime = new Consulta($baseAnime, 'ANIMES');

	$ultimosALL = $consultaAnime->fetchAllRecords("SELECT ani_id, ani_img FROM ANIMES ORDER by ani_id DESC LIMIT 8");

	function getRecomendados($consultaAnime){
		$aux =  $consultaAnime->getAllRecords("SELECT ani_id, ani_img FROM ANIMES WHERE recomendado NOTNULL and ani_id > :id Order by ani_id LIMIT 8;");
		while (!$aux) $aux = getRecomendados($consultaAnime);
		return $aux;
	}
	$recomendados = getRecomendados($consultaAnime);
	$sentencia = [];

	if ($_POST) {
		if (isset($_POST['nombre']))
			$sentencia = $consultaAnime->myQuery("SELECT ani_id, ani_nombre, ani_img, disponible, recomendado, ani_capitulos, ani_temporada, ani_tamanio FROM ANIMES 
									  		   WHERE ani_nombre LIKE ?", "nombre");
		if (isset($_POST['genero']))
			if ($_POST['genero'] == '-- Listar todas --')
				$sentencia = $consultaAnime->fetchAllRecords("SELECT * FROM ANIMES");
			else
				$sentencia = $consultaAnime->myQuery("SELECT ani_id, ani_nombre, ani_img, disponible, recomendado, ani_capitulos, ani_temporada, ani_tamanio, ani_genero FROM ANIMES
						 WHERE ani_genero LIKE ?", "genero");
		$contador = count($sentencia);
	}
	$estrenosAnimes = $consultaAnime->fetchAllRecords("SELECT * FROM ESTRENOS");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <link rel="icon" type="image/png" href="assets/images/icon.png">
	<link rel="stylesheet" href="assets/css/(style).css">
    <link rel="stylesheet" type="text/css" href="./assets/css/yui-3.14.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<title>Búsqueda - <?php echo criterio(); ?></title>
	<style>
		.ultimos{
			background-image: linear-gradient(rgba(0,0,0,0.3), black ),url(assets/images/BackAnimes.webp);
			padding-bottom: 0;
		}
	</style>
</head>
<body>

<!-- Navigator -->
<?php include __DIR__ . "/components/header.php";?>
<!-- End Navigator -->

<!--Home Search Anime -->
<section class="ultimos" id="ultimos" style="padding-bottom:0;">
	<div class="main-text">
		<h2><i id="lupa" class="fa fa-search"></i><span id="special" class="span_name"> Animes</span>.</h2>
		<h3><strong> Puede escribir parcialmente el nombre.</strong></h3>
		<h3><i class="fa fa-edit"></i> Criterio de búsqueda: <span><?php echo criterio(); ?></span>
		</h3>
	</div>

	<center>
		<div class="services-content">
			<!--Search Anime Form-->
			<?php include __DIR__ . "/components/form_anime.php";?>		
			<!--Search Anime Form-->
		</div>			
	</center>
</section>
<!--End Home Search Anime -->

<!-- Cards Animes Busquedas-->
<section style="padding-top:0;padding-bottom:0;" class="portfolio" id="sectionSearch">
	<div class="disponible-content">
		<?php if ($_POST) foreach($sentencia as $anime){ ?>
			<div class="rowDisponible"> 
			<center>    
				<a href="info_anime.php?id=<?php echo $anime->ani_id ?>">
					<img class="CaratulaBusquedas" style="width: 335px; height: 470px; border: solid 3px #a6a5a5;border-radius: 10px;" src="data:image/jpeg;base64,<?php echo base64_encode($anime->ani_img) ?>" />
					<?php if ($anime->disponible) { ?>
						<div class="layerDisponible">
							<?php echo $anime->disponible ?>
							<h4 id="markDisponible" style="color:white;">
								<?php  
										echo '<i id="check" class="fa fa-check-circle"></i>';
										echo " ¡Disponible!</br>";
								?></h4>
						</div>
					<?php }?>
				</a>
				<p class="NombreBusqueda"><strong><?php echo $anime->ani_nombre ?></br> 
					[ <i class="fa fa-download" style="color:rgb(255,199,0);" ></i> <?php echo $anime->ani_tamanio ?> ] </strong><?php if ($anime->recomendado) {echo '- <i id="DisponibleLetter" style="color:yellow; " class="fa fa-star"></i><strong> Recomendado </strong>';} ?></br>
					<strong>Temp: </strong><?php echo $anime->ani_temporada ?>.  <strong>Caps:</strong> <?php echo $anime->ani_capitulos ?>.
				</p>
			</center>
			</div>
		<?php }?>

	<!--Paginator-->
	<?php include __DIR__ . "/components/paginator.php";?>	
	<?php 
		if (empty($_POST)) echo '<style>#sectionSearch{background:none;}</style>
		<div class="main-text"><h3 style="text-align:center;">"No existen busquedas."</h3></div>'; 
		else if ($sentencia == false) echo '<style>#sectionSearch{background:none;}</style>
		<div class="main-text"><h3 style="text-align:center;">"No se encuentra."</h3></div>'; 
	?>
</section>
<!-- End Cards Animes Busquedas-->

<!-- Ultimos Animes Section -->
<section class="portfolio" id="portfolio" style="padding-bottom:0;">
    <div class="main-text">
       <h2 style="margin-top:30px;"><span>Los</span>Recientes<span>.</span></h2>
       <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
       <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
       <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
       </svg></p>
       <h3 style="padding-left:50px;padding-right:50px;">No se pierda las ultimas actualizaciones de la sede <strong>Imperio Animes</strong>, </br>aqui mostramos los ocho agregados recientemente.</h3>
    </div>

    <div class="ultimos-content">
    <center>
	    </br></br></br> 
        <?php foreach($ultimosALL as $u){ ?>
            <a href="info_anime.php?id=<?php echo $u->ani_id ?>">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($u->ani_img) ?>" />
             </a>
        <?php }?>
    </center>
    </div>
</section>
<!-- End Ultimos Animes Section-->

<!-- Recomendados Animes Section -->
<section style="padding-top:0;padding-bottom:0;" class="portfolio">
	<div class="main-text">
                 <h2><i class="fa fa-star" id="campana"></i> <span>Recomendados</span>.</h2>
        <h3 style="text-align:center;padding: 0 5% 0 5%;">
			<strong>¡Hola a todos los amantes del anime!</strong> Les traemos una recomendación que no querrán perderse. 
			Prepárense para sumergirse en un viaje lleno de acción, emociones y personajes inolvidables. 
			<strong>¡Comencemos!</strong>
        </h3>
        </div>

        <div class="ultimos-content">
        <center>
            </br></br></br> 
            <?php foreach($recomendados as $recomendacion){ ?>
                <a href="info_anime.php?id=<?php echo $recomendacion->ani_id ?>">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($recomendacion->ani_img) ?>" />
                </a>
            <?php }?>
        </center>
        </div>
    <center>
        <button onclick="window.location.reload();" style="width:150px;"><i class="fa fa-refresh"></i> Recargar más...</button>
    </center>
</section>
<!-- End Recomendados Animes Section -->

<!---Lanzamientos Animes Section -->
<section class="portfolio" id="lanzamientos" style="padding-top:0;">
		<div class="main-text">
		<h2><span>Lanza</span>mientos<span>.</span></h2>
		<p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
		<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
		</svg></p>
		<h3>En espera de lo mas novedoso de <strong>Animes</strong>.</h3>
	</div>
	</br></br>
	<div class="portfolio-content">
			<?php foreach($estrenosAnimes as $e){ ?>
				<div class="row"> 
					<img width="200" height="282" src="data:image/jpeg;base64,<?php echo base64_encode($e->es_img) ?>" />
					<div class="layer">
					<p><?php echo $e->es_nombre ?></p>
					<p><?php echo $e->es_sinopsis ?></p>
					</div>
				</div>
			<?php }?>
	</div>
	<div id="tooltip"></div>
</section>
<!-- End Lanzamientos Animes Section -->

<!-- Bottom Bar -->
<?php include __DIR__ . "/components/bottomBar.php";?>
<!-- End Bottom Bar -->

</body>
	<!--Scripts-->
	<script defer type="text/javascript" src="./assets/js/scroll.js"></script>
	<script defer type="text/javascript" src="./assets/js/script.js"></script>
	<script defer type="text/javascript" src="./assets/js/validate.js"></script>
	<script type="text/javascript" src="./assets/js/Moment.js"></script>
    <script defer type="text/javascript" src="./assets/js/all.js"></script>
</html>