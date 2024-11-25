<?php
	include __DIR__ . "/class/consulta.php";

	$baseDeDatos = new PDO("sqlite:" . __DIR__ . "/assets/bd_juegos.db");
	$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$baseAnime = new PDO("sqlite:" . __DIR__ . "/assets/bd_anime.db");
	$baseAnime->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	function criterio(){ // Evaluate search
		if ($_POST){
			if ($_POST["nombre"] != "" ){
				return $_POST['nombre'];
			}else return $_POST['genero'];
		}else return 'No existe';
	}

?>