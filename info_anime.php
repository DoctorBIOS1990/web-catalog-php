<?php
    include_once __DIR__ . "/conexion.php";
    $consulta = new Consulta($baseAnime, NULL);

    if ($_GET) {
        $sentencia = $consulta->listById("SELECT * FROM Animes WHERE ani_id = :id LIMIT 1;" , $_GET["id"]);
        $anime = $sentencia->fetch(PDO::FETCH_OBJ);
    }
    else header("location:error.php");

	if ($anime === false) {header("location:error.php"); exit;}
  
        switch(true){
            case $anime->ani_capitulos > 1:
                $medio =  '$ '. ($anime->ani_capitulos * 5). 'CUP';
                break;

            case $medio = 1:
                $medio = '$ '. ($anime->ani_capitulos * 25). 'CUP';
                break;

            default:
                $medio = "No existe capitulos.";
                break;
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
    <title>Anime - <?php echo $anime->ani_nombre?></title>
    <style>
		.about{
            background-image: linear-gradient(rgba(0,0,0,0.1), black ),url(../assets/images/BackAnimes.webp);
            align-items: normal;
        }
		.aboutObject{background-image: linear-gradient(to top, rgba(0,0,0,0.3), rgba(0, 0, 0, 0), black ),url(../assets/images/Background.jpg);}        
	</style>
</head>

<body>

    <!-- Navigation -->
    <?php include __DIR__ . "/components/header.php";?>
    
    <!---About this game Section-->
    <section class="about" id="about" style="padding-bottom:0;">
    
    <center>
         <img id="Cover" width="300" src="data:image/jpeg;base64,<?php echo base64_encode($anime->ani_img) ?>"/>
    </center>
           <div class="about-text">

           <center><h2><span id="special" class="span_name"><?php echo $anime->ani_nombre?></span></h2></center>
           <center><h4 id="DisponibleLetter"><?php if ($anime->disponible){ 
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
                            <td><center><?php echo $anime->ani_id?></center></td>	
                            <td><center><?php echo $anime->ani_nombre?></center></td>	
                            <td><center><?php echo $anime->ani_tamanio ?></center></td>
                        </tr>
                        
                        <thead>
                            <tr>
                                <th>TEMPORADA</th>
                                <th>ESTUDIO</th>
                                <th>CAPITULOS</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><center><?php echo $anime->ani_temporada?></center></td>	
                                <td><center><?php echo $anime->ani_estudio?></center></td>	
                                <td><center><center><?php echo $anime->ani_capitulos ?></center></center></td>
                            </tr>
                        </tbody>
                        
                        <thead>
                            <th colspan="2">GÉNERO</th>
                            <th>FECHA</th>
                        </thead>
                        <tbody>
                            <td colspan="2"><center><?php echo $anime->ani_genero ?></center></td>
                            <td><center><?php echo $anime->ani_fecha ?></center></td>
                        </tbody>
                        <thead>
                            <?php if ($anime->disponible) {?>
                                 <th colspan="3"><i class="fa fa-shopping-cart" style="color:white;"></i> ADQUIRIR</th>
                            <?php } ?>
                        </thead>
                        <tbody>
                             <?php if ($anime->disponible) {?>
                                <td colspan="3">
                                <?php $producto = 'Anime: '. $anime->ani_nombre; include __DIR__ . "/components/compra.php";
                                echo '<center style="padding-top:5px;"><strong>Saldo Completo:   </strong>'. $medio.'</center>';?>
                                </td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </center></p>
            </div>
</section>

<section class="aboutObject" style="padding-top:0;">
    <div class="about-text">
             <h3 id="label"><B><br><i class="fa fa-book"></i> - SINOPSIS: <br></B></h3>
                 <p id="sinopsis">
                        <?php if ($anime->ani_sinopsis === "?" or empty($anime->ani_sinopsis)){ 
                                echo '"No esta disponible en el catálogo."';
                                }
                                else echo $anime->ani_sinopsis;
                        ?>
                 </p>       
        </div>
        <div id="tooltip"></div>
    </section>

<p class="bar" style="font-size:24px"></i> 
	<a style="bottom:40px;" onclick="window.history.back();"><i class="fa fa-arrow-circle-left" data-tooltip="Volver a la página anterior"></i></a>    
    <a target="_blank" onclick="alertDownload('www.animeslatino.club');" href="https://www.animeslatino.club/recherche?q=<?php echo str_replace(" ", "+",$anime->ani_nombre);?>"><i class="fa fa-cloud-download fa-fw" data-tooltip="Descargas en Anime Latino"></i></a>
    <a target="_blank" onclick="alertDownload('animedescargas.com');" href="https://animedescargas.com/?s=<?php echo str_replace(" ", "+",$anime->ani_nombre). '&asl_active=1&p_asl_data=1&categoryset[]=8&categoryset[]=31&categoryset[]=32&categoryset[]=1&customset[]=post&asl_gen[]=excerpt&asl_gen[]=content&asl_gen[]=title&qtranslate_lang=0&filters_initial=1&filters_changed=0' ;?>"><i class="fa fa-cloud-download fa-fw" data-tooltip="Descargas en Anime Descargas"></i></a>
    <a target="_blank" onclick="alertGeneric('Capturas en Google');" href="https://www.google.com/search?q=Capturas+Juego+'<?php echo str_replace(" ", "+",$anime->ani_nombre).' PC+Game&sa=X&sca_esv=63099308d1ada3ea&udm=2&fbs=AEQNm0CbCVgAZ5mWEJDg6aoPVcBgOGjTvRc9yFTaqV7WRdEZ5vrNCA3fjceDVxXTWs65gbgLeHpNqbEFY3HCfKsdJhnlUqy6J_VQgRbrDFeCKOFXy1EfpJySOxycAVvglFW3XgVnbAO4P3GC6K4q_tusskTx6UJLvlUuevDty122IWai3DySPD19FhEbU3MvupQHvkpYvbOU&ved=2ahUKEwjeg8jUwqeJAxU_TDABHVjTENMQtKgLegQIARAH&biw=1358&bih=628&dpr=1' ;?>"><i class="fa fa-camera fa-fw" data-tooltip="Capturas en Google"></i></a>
    <a target="_blank" onclick="alertGeneric('Ver Opening en Youtube');" href="https://www.youtube.com/results?search_query=<?php echo str_replace(" ", "+",$anime->ani_nombre).'+Opening+Temporada+'.''.$anime->ani_temporada ;?>"><i class="fa fa-play fa-fw" data-tooltip="Ver Opening en Youtube"></i></a>
    <a target="_blank" onclick="alertGeneric('Ver Trailer en Youtube');" href="https://www.youtube.com/results?search_query=<?php echo str_replace(" ", "+",$anime->ani_nombre).'+Trailer' ;?>"><i class="fa fa-play-circle fa-fw" data-tooltip="Ver Trailer en Youtube"></i></a>
    <a style="bottom:80px;" href="#"><i class="fa fa-arrow-circle-up" data-tooltip="Subir al inicio de la página"></i></a>
</p>

</body>
    <script src="./assets/js/tooltip.js"></script>
    <script src="./assets/js/script.js"></script>
</html>