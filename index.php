<?php include __DIR__ . "/querys.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <title>Imperio GAMERS - Inicio</title>
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/(style).css">
	<link rel="stylesheet" type="text/css" href="./assets/css/yui-3.14.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Navigator bar -->
<?php include __DIR__ . "/components/header.php";?>
<!-- End Navigator bar -->

<!-- Home Section -->
<section class="home" id="home">
    <div class="home-text">
        <div class="slide">
            <span class="uno">Hola</span></br>
            <span class="dos">Somos Nosotros.</span>

        </div>
        <h1>IMPERIO GAMERS</h1>

        <h3><i class="fa fa-gamepad"></i> Venta de Juegos, 
        <span class="typer" 
                            id="some-id" 
                            data-delay="100" 
                            data-delim=":" 
                            data-words="Xbox 360.:PlayStation 2.: PlayStation Portable.:Nintendo Wii.:PC.:" 
                            data-colors="rgb(174, 163, 67);">PC.</span>
                    <span class="cursor" 
                            data-cursordisplay=" |" 
                            data-owner="some-id" 
                            style="transition: all 0.1s ease 0s; opacity: 1;"> |
                    </span>
        </span>
        </h3>

        <p>La Sede se complace en su visita y en darles el servicio de la mejor calidad.
            <strong></br>"Gracias por su visita".</strong></p> 

        <div class="button">
            <a href="#Buscar" class="btn"><i class="fa fa-search"></i> Empezar a buscar</a>
        </div>
    </div>
</section>
<!-- End Home -->

<!-- About Me -->
<section style="padding-bottom:0px;padding-top:0;">

<!-- Marquee Companys-->
    <?php include __DIR__ . "/components/marquee.php";?>
</section>
<!-- End Marquee Companys-->

<!---AboutME Section-->
<section class="about" id="about" style="padding-bottom:0;">
    <center><div class="pestañeo"></div></center>
        <div class="about-text">
            <h2><span>De</span>Nosotros<span>.</span></h2>
            <h4>Siempre pensando en el cliente. </h4>
            <p> <I>Hola</I> <i class="fa fa-hand-stop-o"></i>, <strong> Imperio Gamers</strong> tiene 
                alrededor de 5 años en el negocio de los videojuegos y el entretenimiento.
                Acumulando un historial de agrado de distintas partes de Santiago de Cuba y ganando 
                prestigio por el buen trato al cliente a la hora de compra, soporte técnico con su PC, 
                y la automatización de los servicios para los clientes.</br>
                
                <a id="terms" href="terms.php"><i class="fa fa-bullhorn" ></i> Nuestra Política de trabajo.</a></br></br>
                <i class="fa fa-thumb-tack"></i> Atentamente, su servidor:<strong>     <i class="fa fa-user"></i>  Juan Pablo.</strong>
            </p>       
        </div>
</section>   
<!-- End About Me -->

<!---Catalogo Section-->
<section class="services" id="Buscar" style="padding-bottom:0;">
    <div class="main-text">
        <h2 style="margin-top:30px;"><span>Nuestro</span>Servicio<span>.</span></h2>
        <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0m2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0M9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5M1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2z"/>
        </svg></p>
        <h3><strong> Búsqueda en Catálogo.</strong></br>Sino encuentra lo que busca puede encargarlo.</h3>
    </div>
        <div class="services-content">
			<!-- Search Form Juegos-->
			<?php include __DIR__ . "/components/form_game.php";?>
            <!-- End Search Form Juegos-->

            <!-- Otros Servicios-->
            <center>
                <div class="detalles-content">
                <p><center>
                <div id="responsible" >
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2" style="padding:5px;">
                                    <center><i class="fa fa-puzzle-piece"></i> Otros servicios que ofertamos</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding:10px;"><a style="color:#fff;" href="busqueda_animes.php"><i class="fa fa-video-camera"></i> Animes.</a></td>
                                <td style="padding:10px;"><a style="color:#fff;" href="busqueda_consola.php"><i class="fa fa-gamepad"></i> Juegos de Consola.</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </center>
            <!-- End Otros Servicios-->
            </div>
            </center>
        </div>
        <div class="main-text">
                 <h2 style="margin-top:100px;"><i class="fa fa-star" id="campana"></i> <span>Recomendados</span>.</h2>
        <h3 style="text-align:center;padding: 0 5% 0 5%;">
            <strong>Sumérgete</strong> en mundos llenos de aventuras y desafíos con nuestra selección de juegos recomendados. 
            Desde emocionantes batallas hasta historias cautivadoras, descubre títulos que te llevarán a vivir 
            experiencias únicas y emocionantes. 
            ¡<strong>Prepárate para disfrutar</strong> horas de diversión con los juegos que tenemos para ti!
        </h3>
        </div>

        <!-- Covers Juegos Recomendados -->
        <div class="ultimos-content">
            <center>
                </br></br></br> 
                <?php foreach($recomendados as $recomendacion){ ?>
                    <a href="info_game.php?id=<?php echo $recomendacion->id ?>">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($recomendacion->caratula) ?>" />
                    </a>
                <?php }?>
            </center>
        </div>
        <!-- End Covers Juegos Recomendados -->
    <center>
        <button onclick="window.location.reload();" style="width:150px;"><i class="fa fa-refresh"></i> Recargar más...</button>
    </center>
</section>
<!-- End Catalogo Section -->

<!--Ultimos 8 juegos -->
<section class="ultimos" id="ultimos" style="padding-bottom:0;">
    <div class="main-text">
       <h2 style="margin-top:30px;"><span>Los</span>Recientes<span>.</span></h2>
       <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
       <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
       <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
       </svg></p>
       <h3 style="padding-left:50px;padding-right:50px;">No se pierda las ultimas actualizaciones de la sede <strong>Imperio Gamers</strong>, </br>aqui mostramos los ultimos ocho juegos agregados recientemente.</h3>
    </div>

    <!-- Covers Juegos -->
    <div class="ultimos-content">
        <center>
            </br></br></br> 
            <?php foreach($ultimosALL as $u){ ?>
                <a href="info_game.php?id=<?php echo $u->id ?>">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($u->caratula) ?>" />
                </a>
            <?php }?>
        </center>
    </div>
    <!-- End Covers Juegos -->
    </section>
<!--End Ultimos 8 juegos -->

<!--Lanzamientos Section -->
<section class="portfolio" id="lanzamientos">
         <div class="main-text">
            <h2><span>Lanza</span>mientos<span>.</span></h2>
            <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
            </svg></p>
            <h3>Lo último que se espera en el Mundo Gamer.</h3>
        </div>
        </br></br>

        <!-- Covers Juegos -->
        <div class="portfolio-content">
                <?php foreach($estrenosALL as $e){ ?>
                    <div class="row"> 
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($e->ex_img) ?>" />
                        <div class="layer">
                        <p><?php echo $e->Nombre ?></p>
                        <p><?php echo $e->contenido ?></p>
                        </div>
                    </div>
                <?php }?>
        </div>
        <!-- End Covers Juegos -->
    </section>
<!--End Lanzamientos Section -->

<!---Contact Section-->
<section class="contact" id="contact">
    <div class="contact-text">
        <!-- Card Form -->            
        <div class="cardContact">
        <h2><img id="contactLogo" src="assets/images/casco.png" alt="Logo"><span id="special">Contacta</span><strong>nos!</strong></h2> 
            <?php foreach($info as $CONTACTO){ ?>
                <p><strong><i class="fa fa-map-marker"></i> Dirección: </strong>Calle E % 2 y 3 111 1/4 Reparto Vista Hermosa.</p>
                
                <!-- Datos -->            
                <center>
                    <p><strong><i class="fa fa-mobile-phone"></i> Movil: </strong> 53795328</br>   
                    <strong><i class="fa fa-phone-square"></i> Teléfono: </strong> 22695274. 
                    </p>
                </center>
                <!-- End Datos -->            

                <!-- Horario -->            
                <p><i class="fa fa-clock-o"></i> <strong>Horario:</strong></br>
                <?php echo $CONTACTO->HORARIO ?>.
                <!-- End Horario -->            
                </p>
            <?php }?>
            <center>
            <div class="btnWhatsapp">
                <a href="whatsapp://send?phone=+5353795328&text=Hola Juan Pablo.">
                   <p><i style="font-size:24px;" class="fa fa-whatsapp"></i>  Whatsapp</p>
                </a>
            </div>  
            </center>
        </div>
        <!-- End Card Form -->            
    </div>

    <!-- Mapa -->
    <div class="contact-text">
        <center>
            <img id="mapa" width="300" src="data:image/jpeg;base64,<?php echo base64_encode($CONTACTO->MAPA) ?>"/>
        </center>
    </div>
    <!-- End Mapa -->
</section>
<!-- End Contact Section -->

<a href="#" class="scrollup"><i class="fa fa-chevron-circle-up"></i></a>

<!-- Footer Section -->
<?php include __DIR__ . "/components/footer.php";?>
<!-- End Footer Section -->

</body>
    <!-- Scripts -->
    <script defer src="./assets/js/scroll.js"></script>
    <script defer src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/Moment.js"></script>
    <script defer src="./assets/js/all.js"></script> 
    <script src="./assets/js/jquery.min.js"></script>
</html>
