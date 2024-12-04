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
    <!---Navigator-->
    <?php include __DIR__ . "/components/header.php";?>

    <!---Home Section-->
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
                <strong></br>"Gracias por su visita".</strong>
        </p> 

        <div class="button">
		        <a href="#Buscar" class="btn"><i class="fa fa-search"></i> Empezar a buscar</a>
        </div>
    </section>
    
    <!---AboutME Section-->
    <section class="about" id="about" style="padding-bottom:0;">
    
    <center>
            <!--<img class="levitar" src="assets/images/Info.png">--> 
            <div class="pestañeo"></div>
    </center>
    
        <div class="about-text">
            <h2><span>De</span>Nosotros<span>.</span></h2>
            <h4>Siempre pensando en el cliente. </h4>
            <p> <I>Hola</I> <i class="fa fa-hand-stop-o"></i>, <strong> Imperio Gamers</strong> tiene alrededor de 5 años en el negocio de los videojuegos.
                Acumulando un historial de agrado de distintas partes de Santiago de Cuba y ganando 
                prestigio por el buen trato al cliente a la hora de compra, soporte técnico con su PC, 
                y la automatización de los servicios para los clientes.
            </br>
            <a id="terms" href="terms.php"><i class="fa fa-bullhorn" ></i> Nuestra Política de trabajo.</a></br></br>
            <i class="fa fa-thumb-tack"></i> Atentamente, su servidor:<strong>     <i class="fa fa-user"></i>  Juan Pablo.</strong>
           
        </p>       
            
        </div>
    </section>   

    <!---Catalogo Section-->
    <section class="services" id="Buscar" style="padding-bottom:0;">
            <div class="main-text">
                <h2><span>Nuestro</span>Servicio<span>.</span></h2>
                <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0m2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0M9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5M1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2z"/>
                </svg></p>
                <h3><strong> Búsqueda en Catálogo.</strong></br>Sino encuentra lo que busca puede encargarlo.</h3>
            </div>

        <div class="services-content">
			<!--Search Form-->
			<?php include __DIR__ . "/components/form_game.php";?>
            <center>
                <div class="detalles-content">
                <p><center>
                <div id="responsible">
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
            </center></p>
            </div>


            </center>
        </div>
        <div class="main-text">
                 <h2><i class="fa fa-star" id="campana"></i> <span>Recomendados</span>.</h2>
        <h3 style="text-align:Justify;">
            <strong>Sumérgete</strong> en mundos llenos de aventuras y desafíos con nuestra selección de juegos recomendados. 
            Desde emocionantes batallas hasta historias cautivadoras, descubre títulos que te llevarán a vivir 
            experiencias únicas y emocionantes. 
            ¡<strong>Prepárate para disfrutar</strong> horas de diversión con los juegos que tenemos para ti!
        </h3>
        </div>

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
    <center>
        <button onclick="window.location.reload();" style="width:150px;"><i class="fa fa-refresh"></i> Recargar más...</button>
    </center>
    </section>

    <!---ULTIMOS Section-->
    <section class="ultimos" id="ultimos" style="padding-bottom:0;">

    <div class="main-text">
       <h2><span>Los</span>Recientes<span>.</span></h2>
       <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
       <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
       <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
       </svg></p>
       <h3 style="padding-left:50px;padding-right:50px;">No se pierda las ultimas actualizaciones de la sede <strong>Imperio Gamers</strong>, </br>aqui mostramos los ultimos ocho juegos agregados recientemente.</h3>
    </div>

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
    </section>

     <!---Lanzamientos Section-->
     <section class="portfolio" id="lanzamientos">
         <div class="main-text">
            <h2><span>Lanza</span>mientos<span>.</span></h2>
            <p><svg xmlns="" width="128" height="128" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
            </svg></p>
            <h3>Lo último que se espera en el Mundo Gamer.</h3>
        </div>
        </br></br>
        <div class="portfolio-content">
                <?php foreach($estrenosALL as $e){ ?>
                    <div class="row"> 
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($e->ex_img) ?>" />
                        <div class="layer">
                        <p><?php echo $e->contenido ?></p>
                        </div>
                    </div>
                <?php }?>
        </div>
    </section>

  <!---Contact Section-->
<section class="contact" id="contact">
    <div class="contact-text">
        <h2>
            <svg width="128" height="128">
                <path d="M0 0 C0.85142578 -0.02449219 1.70285156 -0.04898437 2.58007812 -0.07421875 C11.94771955 -0.11702595 18.64721312 3.26385832 25.40625 9.59375 C33.62906631 17.81656631 36.53107394 24.45089486 36.625 35.9375 C36.6350708 36.74082764 36.6451416 37.54415527 36.65551758 38.37182617 C36.52951058 47.0913315 33.49613588 53.4447667 28.6875 60.5625 C26.10854018 64.45647398 23.55445711 68.34662107 21.1875 72.375 C22.3940625 72.73851563 23.600625 73.10203125 24.84375 73.4765625 C43.86306429 79.38834644 43.86306429 79.38834644 49.1875 87.375 C50.0422159 92.09842997 49.71760283 95.48579525 47.25 99.625 C36.47235085 110.40264915 19.62513339 111.95712511 5.15234375 111.97070312 C4.35425293 111.96433838 3.55616211 111.95797363 2.73388672 111.95141602 C0.3198835 111.93754243 -2.09022615 111.97179927 -4.50390625 112.00976562 C-18.39632974 112.07806923 -35.18250353 110.34221492 -45.8125 100.375 C-48.99251016 96.78371832 -49.41092526 94.30920794 -49.2109375 89.6171875 C-48.54273077 85.85688686 -46.73500101 83.63630169 -43.8125 81.375 C-36.74002396 76.87911375 -28.82189299 74.62214944 -20.8125 72.375 C-21.39257812 71.43140625 -21.97265625 70.4878125 -22.5703125 69.515625 C-24.6320854 66.14386392 -26.64526251 62.74526426 -28.64501953 59.33642578 C-29.64762311 57.65200145 -30.6928687 55.99308791 -31.74609375 54.33984375 C-37.32272171 44.83149247 -37.46497489 34.43342847 -34.9921875 23.87109375 C-31.5587051 14.4710353 -24.50827094 7.20598386 -15.8125 2.375 C-10.51248066 0.15319311 -5.65516089 0.00844684 0 0 Z M-22.8125 18.375 C-26.44974892 24.02177871 -27.98696545 29.33075158 -28.125 36 C-28.16238281 37.16789062 -28.19976562 38.33578125 -28.23828125 39.5390625 C-27.36537412 47.403235 -23.1483791 53.79694632 -18.8125 60.25 C-17.84656658 61.71412544 -16.88176894 63.17900067 -15.91796875 64.64453125 C-15.41571777 65.40588379 -14.9134668 66.16723633 -14.39599609 66.95166016 C-11.58847918 71.24820855 -8.85874862 75.59378625 -6.125 79.9375 C-5.33125977 81.19699463 -5.33125977 81.19699463 -4.52148438 82.48193359 C-3.28429348 84.44574823 -2.0479359 86.41008101 -0.8125 88.375 C3.2009856 87.03717147 3.69126417 85.30582202 5.8125 81.6875 C6.52074132 80.49786684 7.23042826 79.30909338 7.94140625 78.12109375 C8.3089502 77.50347168 8.67649414 76.88584961 9.05517578 76.24951172 C10.89147937 73.20959388 12.82032538 70.23117397 14.75 67.25 C15.12543945 66.66412109 15.50087891 66.07824219 15.88769531 65.47460938 C17.62458829 62.76741041 19.38637074 60.0853488 21.20703125 57.43359375 C26.78113279 49.18392348 30.35197803 40.96651708 28.8125 30.84765625 C26.52651988 21.80374738 21.65625231 15.82625393 14.1875 10.375 C1.3561592 3.18564022 -13.66714844 7.88584168 -22.8125 18.375 Z M-40.8125 89.375 C-42.14583333 91.875 -42.14583333 91.875 -40.8125 94.375 C-30.39995481 104.01730212 -10.76503734 104.92038727 2.73046875 104.625 C21.81272019 103.5148184 21.81272019 103.5148184 39.1875 96.375 C40.99316529 93.82628354 40.99316529 93.82628354 42.1875 91.375 C35.32699082 83.14238898 25.36354257 81.7038303 15.1875 80.375 C14.85016846 80.91503662 14.51283691 81.45507324 14.1652832 82.01147461 C12.62604285 84.45556181 11.06349257 86.88386265 9.5 89.3125 C8.96955078 90.16263672 8.43910156 91.01277344 7.89257812 91.88867188 C7.36728516 92.69755859 6.84199219 93.50644531 6.30078125 94.33984375 C5.82423096 95.0887085 5.34768066 95.83757324 4.85668945 96.60913086 C2.75003819 98.83779966 1.18325927 99.05299474 -1.8125 99.375 C-2.85556085 97.89681613 -3.89685154 96.41738319 -4.9375 94.9375 C-5.57429688 94.03386719 -6.21109375 93.13023438 -6.8671875 92.19921875 C-9.16689599 88.86048534 -11.32722556 85.44378827 -13.453125 81.9921875 C-13.90171875 81.45851563 -14.3503125 80.92484375 -14.8125 80.375 C-23.62634473 80.375 -34.10107334 83.75931647 -40.8125 89.375 Z " fill="#CBCBCB" transform="translate(63.8125,8.625)"/>
                <path d="M0 0 C4.7206799 2.6685933 8.09616463 5.86797361 9.71875 11.12109375 C10.49229543 16.19748563 10.35098846 19.90177671 7.96875 24.49609375 C7.22625 25.36234375 6.48375 26.22859375 5.71875 27.12109375 C5.1 27.86359375 4.48125 28.60609375 3.84375 29.37109375 C-0.10082153 32.61956443 -3.7815452 33.34061122 -8.78125 32.99609375 C-14.38977303 32.18545009 -17.81769749 29.74286816 -21.59375 25.55859375 C-24.72212756 21.03982616 -25.16157426 16.45334355 -24.28125 11.12109375 C-22.19144509 6.52207672 -19.56998646 3.08764609 -15.53125 0.05859375 C-10.23750351 -1.46844851 -5.23853463 -2.01827105 0 0 Z M-13.71875 8.68359375 C-15.79983903 11.93009264 -16.21374957 14.27356914 -16.28125 18.12109375 C-15.06517788 21.00126457 -13.97821456 22.57347874 -11.53125 24.49609375 C-8.09917041 25.44944919 -5.70302384 25.03764031 -2.28125 24.12109375 C0.6220947 21.51552799 1.59282924 19.9845504 2.15625 16.12109375 C1.66577329 12.7578249 0.73611344 10.83677531 -1.28125 8.12109375 C-5.41932719 6.05205516 -9.92004309 6.24852522 -13.71875 8.68359375 Z " fill="#CBCBCB" transform="translate(71.28125,28.87890625)"/>
            </svg>
    
        <span id="special">Contacta</span><strong>nos!</strong> 
        </h2> 
        <center id="special">
            <?php foreach($info as $CONTACTO){ ?>
                <h4><?php echo $CONTACTO->DIRECCION?></h4>
                <p><?php echo $CONTACTO->HORARIO ?></p>
            <?php }?>
        </center>
        <h5 class="description text-center"><strong id="special"><i class="fa fa-leanpub"></i> Catálogo Imperio Gamers 2024®.</strong></h5>
    </div>

    <div class="contact-text">
        <center>
            <img width="300" src="data:image/jpeg;base64,<?php echo base64_encode($CONTACTO->MAPA) ?>"/>
        </center>
    </div>

</section>

<a href="#" class="scrollup"><i class="fa fa-chevron-circle-up"></i></a>

<!---End Section-->
<?php include __DIR__ . "/components/footer.php";?>
  
</body>
    <script defer src="./assets/js/scroll.js"></script>
    <script defer src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/Moment.js"></script>
    <script defer src="./assets/js/all.js"></script> 
</html>
