<?php if($contador)  { ?>
<p class="bar"></i> 
	<a style="bottom:40px;" onclick="window.history.back();"><i class="fa fa-chevron-circle-left"></i></a>  
	<?php if($contador)  { ?>
		<a style="color:white;"></i><?php echo('- '. $contador); ?> - </a>
	<?php }?>
	  <a style="bottom:80px;" href="#"><i class="fa fa-chevron-circle-up"></i></a>
</p>
<?php } else include __DIR__ . "/footer.php"; ?>
