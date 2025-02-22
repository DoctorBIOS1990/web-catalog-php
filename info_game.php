<?php
    include_once __DIR__ . "/conexion.php";

    if (!isset($_GET["id"])) {
        header("location:error.php");
        exit;
    }
    
    $consulta = new Consulta($baseDeDatos, NULL);
    $sentencia = $consulta->listById("SELECT * FROM PC WHERE id = :id LIMIT 1;", $_GET["id"]);
    $videojuego = $sentencia->fetch(PDO::FETCH_OBJ);
    
    if ($videojuego === false) {
        header("location:error.php");
        exit;
    }
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
   		.about{
            background-image: linear-gradient(rgba(0,0,0,0.1), black ),url(../assets/images/BackGames.webp);
            align-items: normal;
        }
        .aboutObject{background-image: linear-gradient(to top, rgba(0,0,0,0.3), rgba(0, 0, 0, 0), black ),url(../assets/images/Background.webp);}
	</style>
</head>

<body>
<!-- Navigator -->
<?php include __DIR__ . "/components/header.php";?>
<!-- End Navigator -->

<!-- About this game Section -->
<section class="about" id="about" style="padding-bottom:0;">
    <center>
         <img id="Cover" width="300" src="data:image/jpeg;base64,<?php echo base64_encode($videojuego->caratula) ?>"/>
    </center>
           <div class="about-text">

           <center><h2><span id="special" class="span_name"><?php echo $videojuego->nombre?></span></h2>
           <h4 id="DisponibleLetter" style="margin-bottom:0;" ><?php if ($videojuego->disponible){ 
                            echo '<i id="check" class="fa fa-check-circle"></i>';
                            echo " ¡Ya Disponible!";
                            }
                         ?>
                   </h4>
            </center>

            <!-- table -->
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
                        <thead>
                            <?php if ($videojuego->disponible) {?>
                                 <th colspan="3"><i class="fa fa-shopping-cart" style="color:white;"></i> ADQUIRIR</th>
                            <?php } ?>
                        </thead>
                        <tbody>
                             <?php if ($videojuego->disponible) {?>
                                <td colspan="3">
                                <?php $producto = $videojuego->nombre;include __DIR__ . "/components/compra.php";?>
                                </td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </center></p>
            </div>
            <!-- End table -->
          
    </section>
<!-- About this game Section -->

<!-- Requisitos, Sinopsis Section -->
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
            <!-- Float tootip-->          
            <div id="tooltip"></div>
            
</section>
<!-- End Requisitos, Sinopsis Section -->

<!-- Personalize footer bar-->
<p class="bar" style="font-size:24px"></i> 
	<a style="bottom:40px;" onclick="window.history.back();"><i class="fa fa-arrow-circle-left" data-tooltip="Volver a la página anterior"></i></a>    
    <a target="_blank" onclick="alertDownload('www.zona-leros.com');" href="https://www.zona-leros.com/search?q=<?php echo str_replace(" ", "+",$videojuego->nombre);?>"><i class="fa fa-cloud-download fa-fw" data-tooltip="Descargar desde Zona-Leros"></i></a>
    <a target="_blank" onclick="alertDownload('Compu-PC.com');" href="https://compu-pc.com/?s=<?php echo str_replace(" ", "-",$videojuego->nombre);?>"><i class="fa fa-cloud-download fa-fw" data-tooltip="Descargar desde Compu-PC"></i></a>
    <a target="_blank" onclick="alertGeneric('Capturas en Google.');" href="https://www.google.com/search?q=Capturas+Juego+'<?php echo str_replace(" ", "+",$videojuego->nombre).' PC+Game&sa=X&sca_esv=63099308d1ada3ea&udm=2&fbs=AEQNm0CbCVgAZ5mWEJDg6aoPVcBgOGjTvRc9yFTaqV7WRdEZ5vrNCA3fjceDVxXTWs65gbgLeHpNqbEFY3HCfKsdJhnlUqy6J_VQgRbrDFeCKOFXy1EfpJySOxycAVvglFW3XgVnbAO4P3GC6K4q_tusskTx6UJLvlUuevDty122IWai3DySPD19FhEbU3MvupQHvkpYvbOU&ved=2ahUKEwjeg8jUwqeJAxU_TDABHVjTENMQtKgLegQIARAH&biw=1358&bih=628&dpr=1' ;?>"><i class="fa fa-camera fa-fw" data-tooltip="Capturas en Google"></i></a>
    <a target="_blank" onclick="alertGeneric('Ver Trailer desde Youtube.');" href="https://www.youtube.com/results?search_query=<?php echo str_replace(" ", "+",$videojuego->nombre).'+Game+Play' ;?>"><i class="fa fa-play fa-fw" data-tooltip="Ver GamePlay en Youtube"></i></a>
    <a target="_blank" onclick="alertGeneric('Ver GamePlay desde Youtube.');" href="https://www.youtube.com/results?search_query=<?php echo str_replace(" ", "+",$videojuego->nombre).'+Trailer' ;?>"><i class="fa fa-play-circle fa-fw"data-tooltip="Ver Trailer en Youtube"></i></a>
    <a style="bottom:80px;" href="#"><i class="fa fa-arrow-circle-up" data-tooltip="Subir al inicio de la página"></i></a>
</p>
<!-- End Personalize footer bar-->

</body>
    <script src="./assets/js/tooltip.js"></script>
    <script src="./assets/js/script.js"></script>
</html>