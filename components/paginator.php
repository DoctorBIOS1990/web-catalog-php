<?php
	// Obtener el número total de resultados
	$totalResultados = $contador;
	$porPagina = 20; // Número de elementos por página
	$totalPaginas = ceil($totalResultados / $porPagina); // Calcular el total de páginas
?>

</div>
<center>
	<div class="pagination">
		<?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>
			<button class="btnPaginator" onclick="mostrarPagina(<?php echo $i; ?>)"><?php echo $i; ?></button>
		<?php } ?>
	</div><center>

<script>
	const elementos = document.getElementsByClassName('rowDisponible');
	const porPagina = 20; // Número de elementos por página
	const totalPaginas = <?php echo $totalPaginas; ?>;

	function mostrarPagina(pagina) {
		// Ocultar todos los elementos
		for (let i = 0; i < elementos.length; i++) {
			elementos[i].style.display = 'none';
		}

		// Calcular el rango de elementos para la página
		const inicio = (pagina - 1) * porPagina;
		const fin = Math.min(inicio + porPagina, elementos.length);

		// Mostrar los elementos de la página actual
		for (let i = inicio; i < fin; i++) {
			elementos[i].style.display = 'block';
		}
		document.location('#sectionSearch');
	}
	mostrarPagina(1);

</script>


