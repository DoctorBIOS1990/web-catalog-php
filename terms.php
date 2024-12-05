<?php
    $message = "";

    if ($_GET["id"] == "404") {
       $message = 'No se encuentra.';
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <title>Imperio GAMERS - Términos</title>
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/(style).css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./assets/css/yui-3.14.css">

    <style>
        td, th{
            padding: 10px;
            text-align: center;
        }
    </style>

</head>
 <body>

<?php include __DIR__ . "/components/header.php";?>

   <!---AboutME Section-->
   <section class="about" id="about">
    
    <center><img style="filter:sepia();" class="levitar" src="assets/images/1.png"></center>
    
        <div class="about-text">
            <h2><span>Aclaraciones</span>.</h2>
            <h4><i class="fa fa-bullhorn" ></i> Nuestra política. </h4>
            <p> 
                1 - Si el cliente presenta problemas a la hora de instalar el juego deberá regresar de inmediato y 
                reportar dicho incidente. </br>
                2 - En la sede de Imperio Gamers se le probará el juego.</br>
                3 - Si el juego tiene problemas en su instalador o en el crack, tiene derecho a reclamar por el 
                juego y cambiarlo por otro de igual precio. </br>
                4 - Si el juego funciona bien, queda claro que el problema está en la PC del cliente. </br>
                5 - No se hace devolución de dinero.

                <h4><i class="fa fa-bullhorn" ></i> Formas de pago: </h4>

                <center>
                <table class="test-center">
                    <tbody>
                        <tr>
                            <th><p style="font-size:36px"><i class="fa fa-money"></i></p> Dinero efectivo.</th>
                            <td><p style="font-size:36px"><i class="fa fa-credit-card"></i></p> Transferencia Targeta CUP, MLC.</td>
                            <td><p style="font-size:36px"><i class="fa fa-mobile"></i></p> Saldo móvil.</td>
                        </tr>
                    </tbody>
                </table>
                </center>
            </br></br><i class="fa fa-thumb-tack"></i> Atentamente, su servidor:<strong>     <i class="fa fa-user"></i>  Juan Pablo.</strong>
            </p>       
            
        </div>
    </section>  

<?php include __DIR__ . "/components/footer.php";?>
</body>
    <script defer type="text/javascript" src="./assets/js/script.js"></script>         
</html>