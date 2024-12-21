<?php if($contador)  { ?>
<p class="bar"></i> 
	<a style="bottom:40px;" onclick="window.history.back();"><i class="fa fa-arrow-circle-left" data-tooltip="Volver a la página anterior"></i></a>  
	<?php if($contador)  { ?>
		<a style="color:white;"><?php echo('- '. $contador); ?> - </a>
	<?php }?>
	  <a style="bottom:80px;" href="#"><i class="fa fa-arrow-circle-up" data-tooltip="Subir al inicio de la página"></i></a>
</p>
<?php } else include __DIR__ . "/footer.php"; ?>

<script src="./assets/js/tooltip.js"></script>