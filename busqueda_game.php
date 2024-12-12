<?php
	include_once __DIR__ . "/conexion.php";

	$contador = 0;
	$consulta = new Consulta($baseDeDatos, 'PC');
	$sentencia;	

	if ($_POST){
		
		if (isset($_POST['nombre'])){
			$sentencia = $consulta->myQuery("SELECT * FROM PC WHERE nombre LIKE ?", "nombre");
			$contador = count($sentencia);
		}

		if (isset($_POST['genero'])){
			if ($_POST['genero'] == '-- Listar todas --'){
				$sentencia = $consulta->fetchAllRecords("SELECT * FROM PC");
			}else{
				$sentencia = $consulta->myQuery("SELECT * FROM PC WHERE genero LIKE ?", "genero");
			}
			$contador = count($sentencia);
		}
	}
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
			background-image: linear-gradient(rgba(0,0,0,0.3), black ),url(../assets/images/BackGames.webp);
			padding-bottom: 0;
		}
	</style>
</head>
<body>
	
<!---Navigator-->
<?php include __DIR__ . "/components/header.php";?>

<section class="ultimos" id="ultimos">
	<div class="main-text">
		<h2><i id="lupa" class="fa fa-search"></i><span id="special" class="span_name"> Juegos PC</span>.</h2>
		<h3><strong>Puede escribir parcialmente el nombre.</strong></h3>
		<h3><i class="fa fa-edit"></i> Criterio de búsqueda: <span><?php echo criterio(); ?></span>
		</h3>
	</div>

	<center>
		<div class="services-content">
			<!--Search Form-->
			<?php include __DIR__ . "/components/form_game.php";?>
		</div>
	</center>
</section>

<section style="padding-top:0;" class="portfolio" id="sectionSearch">
	<div class="disponible-content">
		<?php if ($_POST) foreach($sentencia as $busqueda){ ?>
			<div class="rowDisponible"> 
			<center>    
				<a href="info_game.php?id=<?php echo $busqueda->id ?>">
					<img class="CaratulaBusquedas" style="width: 335px; height: 470px; border: solid 3px #a6a5a5;border-radius: 10px;" src="data:image/jpeg;base64,<?php echo base64_encode($busqueda->caratula) ?>" />
					<?php if ($busqueda->disponible){ ?>
						<div class="layerDisponible">
							<h4 id="markDisponible" style="color:white;">
								<?php  
										echo '<i id="check" class="fa fa-check-circle"></i>';
										echo " ¡Disponible!</br>";
								?></h4>
						</div>
					<?php }?>
				</a>
				<p class="NombreBusqueda"><strong><?php echo $busqueda->nombre ?> </br> 
					[ <i class="fa fa-download" style="color:rgb(255,199,0);" ></i> <?php echo $busqueda->tamanio ?> ] </strong>
					<?php if ($busqueda->recomendado) {echo '- <i id="DisponibleLetter" style="color:yellow; " class="fa fa-star"></i><strong> Recomendado </strong>';} ?>
				</p>
			</center>
			</div>
			
		<?php }?>
	</div>
	<?php 
		if (empty($_POST)) echo '<style>#sectionSearch{background:none;}</style>
		<div class="main-text"><h3 style="text-align:center;">"No existen busquedas."</h3></div>'; 
		else if ($sentencia == false) echo '<style>#sectionSearch{background:none;}</style>
		<div class="main-text"><h3 style="text-align:center;">"No se encuentra."</h3></div>'; 
	?>
</section>

<!--Bottom Bar-->
<?php include __DIR__ . "/components/bottomBar.php";?>

</body>
	<script defer type="text/javascript" src="./assets/js/scroll.js"></script>
	<script defer type="text/javascript" src="./assets/js/script.js"></script>
	<script defer type="text/javascript" src="./assets/js/validate.js"></script>
	<script type="text/javascript" src="./assets/js/Moment.js"></script>
    <script defer type="text/javascript" src="./assets/js/all.js"></script>
</html>