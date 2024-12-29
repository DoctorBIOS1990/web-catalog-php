<?php
	include __DIR__ . "/class/consulta.php";

	$baseDeDatos = new PDO("sqlite:" . __DIR__ . "/assets/bd_juegos.db");
	$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$baseAnime = new PDO("sqlite:" . __DIR__ . "/assets/bd_anime.db");
	$baseAnime->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$baseConsola = new PDO("sqlite:" . __DIR__ . "/assets/bd_consolas.db");
	$baseConsola->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	function criterio(){ // Evaluate search
		switch(true){
			case isset($_POST["nombre"]):
				return $_POST['nombre'];

			case isset($_POST["genero"]):
				return $_POST['genero'];
				
			case isset($_POST["plataforma"]):
				return $_POST['plataforma'];

			default:
				return "No existe.";
		}
	}

?>