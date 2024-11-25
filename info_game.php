<?php
    include_once __DIR__ . "/conexion.php";

    $consulta = new Consulta($baseDeDatos, NULL);

    if ($_GET) 
        {
            $sentencia = $consulta->listById( "SELECT * FROM PC WHERE id = :id LIMIT 1;" , $_GET["id"]);
            $videojuego = $sentencia->fetch(PDO::FETCH_OBJ);
        } 
    else header("location:error.php");

	if ($videojuego === false) {header("location:error.php");exit;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <link rel="stylesheet" type="text/css" href="./assets/css/yui-3.14.css">
    <link rel="stylesheet" href="assets/css/(style).css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Info - <?php echo $videojuego->nombre?></title>
    <style>
		.about{background-image: linear-gradient(rgba(0,0,0,0.1), black ),url(../assets/images/BackGames.webp);}
        .aboutObject{background-image: linear-gradient(to top, rgba(0,0,0,0.3), rgba(0, 0, 0, 0), black ),url(../assets/images/Background.jpg);}
	</style>
</head>

<body>
    <!-- Navigation -->
    <header class="sticky">
        <a href="#" class="logo"><img width="12" src="assets/images/casco.png" alt="Logo"> Imperio<span class="span_name">GAMERS</span></a>
        <ul class="navlist">
            <li><a href="/"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
            <li><a target="_blank" onclick="alertGame();" href="https://www.zona-leros.com/search?q=<?php echo str_replace(" ", "+",$videojuego->nombre);?>"><i class="fa fa-search fa-fw"></i> Zona-Leros</a></li>
            <li><a target="_blank" onclick="alertGame();" href="https://compu-pc.com/?s=<?php echo str_replace(" ", "-",$videojuego->nombre);?>"><i class="fa fa-search fa-fw"></i> Compu-PC</a></li>
            <li><a target="_blank" onclick="alertGame();" href="https://www.google.com/search?q=Capturas+Juego+'<?php echo str_replace(" ", "+",$videojuego->nombre).' PC+Game&sa=X&sca_esv=63099308d1ada3ea&udm=2&fbs=AEQNm0CbCVgAZ5mWEJDg6aoPVcBgOGjTvRc9yFTaqV7WRdEZ5vrNCA3fjceDVxXTWs65gbgLeHpNqbEFY3HCfKsdJhnlUqy6J_VQgRbrDFeCKOFXy1EfpJySOxycAVvglFW3XgVnbAO4P3GC6K4q_tusskTx6UJLvlUuevDty122IWai3DySPD19FhEbU3MvupQHvkpYvbOU&ved=2ahUKEwjeg8jUwqeJAxU_TDABHVjTENMQtKgLegQIARAH&biw=1358&bih=628&dpr=1' ;?>"><i class="fa fa-google fa-fw"></i> Capturas</a></li>
            <li><a target="_blank" onclick="alertGame();" href="https://www.youtube.com/results?search_query=<?php echo str_replace(" ", "+",$videojuego->nombre).'+Game+Play' ;?>"><i class="fa fa-youtube-play fa-fw"></i> GamePLay</a></li>
            <li><a target="_blank" onclick="alertGame();" href="https://www.youtube.com/results?search_query=<?php echo str_replace(" ", "+",$videojuego->nombre).'+Trailer' ;?>"><i class="fa fa-youtube-play fa-fw"></i> Trailer</a></li>
        </ul>
        <p class='menu-icon' id="menu-icon">≡</p>
    </header>
    
    <!---About this game Section-->
    <section class="about" id="about" style="padding-bottom:0;">
    <center>
         <img id="Cover" width="300" src="data:image/jpeg;base64,<?php echo base64_encode($videojuego->caratula) ?>"/>
    </center>
           <div class="about-text">

           <center><h2><span id="special"><?php echo $videojuego->nombre?></span></h2>
           <h4 id="DisponibleLetter"><?php if ($videojuego->disponible){ 
                            echo '<i id="check" class="fa fa-check-circle"></i>';
                            echo " ¡Ya Disponible!";
                            }
                         ?>
                   </h4>
            </center>
            
            <div class="detalles-content">
                <p><center>
                <div id="responsible">
                    <table>
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>TÍTULO</th>
                                <th>CAPACIDAD</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><center><?php echo $videojuego->id?></center></td>	
                            <td><center><?php echo $videojuego->nombre?></center></td>	
                            <td><center><?php echo $videojuego->tamanio ?></center></td>
                        </tr>
                        
                        <thead>
                            <tr>
                                <th>ESTUDIO</th>
                                <th>COMPAÑIA</th>
                                <th>MODALIDAD</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><center><?php echo $videojuego->estudio?></center></td>	
                                <td><center><?php echo $videojuego->compania?></center></td>	
                                <td><center><center><?php echo $videojuego->modo ?></center></center></td>
                            </tr>
                        </tbody>
                        
                        <thead>
                            <th>GÉNERO</th>
                            <th>IDIOMA</th>
                            <th>FECHA</th>
                        </thead>
                        <tbody>
                            <td><center><?php echo $videojuego->genero ?></center></td>
                            <td><center><?php echo $videojuego->idioma ?></center></td>
                            <td><center><?php echo $videojuego->fecha ?></center></td>
                        </tbody>
                    </table>
                </div>
            </center></p>
            </div>
          
    </section>

    <section class="aboutObject" style="padding-top:0;">
            <div class="about-text">
                <h3 id="label"><U><B><br><i class="fa fa-desktop"></i> - REQUISITOS: <br></B></U></h3>
                    <p id="requisitos">
                            <?php if ($videojuego->requisitos == "?"){ 
                                    echo '"No está disponible en el catálogo."';
                                    }
                                    else echo $videojuego->requisitos;
                            ?>
                    </p>

                <h3 id="label"><B><br><i class="fa fa-book"></i> - SINOPSIS: <br></B></h3>
                    <p id="sinopsis">
                            <?php if ($videojuego->sinopsis === "?" or empty($videojuego->sinopsis) ){ 
                                    echo '"No esta disponible en el catálogo."';
                                    }
                                    else echo $videojuego->sinopsis;
                            ?>
                    </p>         
            </div>
    </section>


<a onclick="window.history.back();" class="GoBack"><i class="fa fa-chevron-circle-left"></i></a>

<!---End Section-->
<?php include __DIR__ . "/components/footer.php";?>

</body>
    <script type="text/javascript" src="./assets/js/script.js"></script>
</html>